<?php

namespace App\Services;

use App\Repositories\Contracts\UserInterface;
use App\Exceptions\CredentialsException;
use App\Exceptions\UserException;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserUnityResource;
use App\Models\ProfileUserUnity;
use App\Models\Registration;
use App\Models\Sector;
use App\Models\SectorRegistration;
use App\Models\User;
use App\Repositories\Core\UserRepository;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService implements UserInterface
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function findWhereFirst(string $column, string $value)
    {
        return $this->repository->findWhereFirst($column, $value);
    }

    public function getAll(): UserCollection
    {
        return new UserCollection($this->repository->getAll());
    }

    public function paginate(int $totalPage): LengthAwarePaginator
    {
        return $this->repository->paginate($totalPage);
    }

    public function applyFilter(array $data)
    {
        return $this->repository->applyFilter($data);
    }

    public function findById(int $id): UserResource
    {
        return  new UserResource($this->repository->findById($id));
    }

    public function storeUser(array $data)
    {
        $data['password'] = Str::random(10);
        $user = $this->repository->storeUser($data);
        $url = config('app.email_url');

        Mail::send('email.accountCreation', ['code' => $data['password'], 'url' => $url], function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Criação de Conta - SIGTS');
        });

        return $user;
    }

    public function update(array $request, int $id): void
    {
        $user = $this->findById($id);
        $this->repository->updateUser($user, $request);
    }

    public function updateUser(array $request, int $id): void
    {
        $user = $this->findById($id);
        $this->repository->updateUser($user, $request);
    }

    public function destroy(int $id): void
    {
        $user = $this->findById($id);
        $this->repository->destroy($user);
    }
    
    public function login(object $request): string
    {
        $user = $this->repository->findWhereFirst('cpf', $request->cpf);

        $registrationIsActive = $user->registrations('user_id', $user->id)->count();

        if (isset($user->deleted_at) && $user->deleted_at != null) {
            throw new UserException('Usuário desativado!');
        } 
        if ($registrationIsActive < 1) {
            throw new UserException('Usuário sem matrícula ativa!');
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw new CredentialsException($user);
        }
        $user->tokens()->delete();
        $abilities = [];
        foreach ($user->profile->abilities as  $ability) {
            array_push($abilities, $ability->slug);
        }
        return $user->createToken('AccessToken', $abilities)->plainTextToken;
    }

    public function loggedInUser($request): UserResource
    {
        $abilities = $this->abilitesToArray($request->user());
        return new UserResource($abilities);
    }

    public function logout($request): void
    {
        $personalAccessToken = new PersonalAccessToken();
        $token = substr($request->headers->get('authorization'), 7);
        $personalAccessToken->findToken($token)->delete();
    }

    public function updatePassword(string $email, string $password): void
    {
        $this->repository->updatePassword($email, $password);
    }

    public function abilitesToArray($data)
    {
        $result = $this->repository->getUserAbilities($data->profile_id);

        $aux = [];

        foreach ($result as  $value) {
            array_push($aux, $value->abilities);
        }
        $data['abilities'] = $aux;
        return $data;
    }

    public function restore(int $id)
    {
        $this->repository->restore($id);
    }

    public function listUsers(Request $request)
    {
        return $this->repository->listUsers($request->all());
    }
}
