<?php

namespace App\Repositories\Core;

use App\Models\User;
use App\Repositories\Core\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{
    private $user;
    private $listUser;


    public function __construct(
        User $user,
    ) {
        parent::__construct($user);
        $this->user = $user;

        $this->listUser = ([
            'profile',
        ]);
    }

    public function getAll(): Collection
    {
        return $this->user->withTrashed()->get();
    }

    public function storeUser(array $data)
    {
        $vinculo = $data['vinculo'];

        //add esses campos para mostrar ao usuário a última unidade e perfil acessado
        $data['profile_id'] = $vinculo[0]['profile_id'];
        try {
            DB::beginTransaction();
            $user = $this->user->create($data);

            DB::commit();

            return $user;
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }

    public function updateUser(object $user, array $data): void
    {
        $vinculo = $data['vinculo'];

        $data['profile_id'] = $vinculo[0]['profile_id'];

        try {
            DB::beginTransaction();
            $user->update($data);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }

    public function findById(int $id): object
    {
        return $this->user->withTrashed()->findOrFail($id);
    }

    public function findWhereFirst(string $column, string $value)
    {
        return $this->user
            ->withTrashed()
            ->where($column, $value)
            ->first();
    }

    public function updatePassword(string $email, string $password): void
    {
        $this->user::where('email', $email)->update(['password' => Hash::make($password)]);
    }

    public function paginate(int $totalPage): LengthAwarePaginator
    {
        return  $this->loadRelationships($this->user->withTrashed())
            ->orderBy('users.name')
            ->paginate($totalPage);
    }

    public function getUserAbilities(int $id)
    {
        // return ProfileAbility::select('abilities.slug as abilities')
        //     ->join('abilities', 'abilities.id', '=', 'profile_abilities.ability_id')
        //     ->where('profile_abilities.profile_id', '=', $id)
        //     ->get();

        return User::where('profile_id', $id)
            ->with('ability:id,slug')
            ->get()
            ->pluck('ability.slug')
            ->toArray();
    }

    public function applyFilter(array $items)
    {
        $relationship = $this->user;
        foreach ($items as $item => $value) {
            if ($item == 'page' || $item == 'per_page') {
                continue;
            }
            if ($value) {
                if (in_array($item, ['name', 'cpf', 'email', 'status', 'unity_id'])) {
                    if ($item == 'name') {
                        $relationship->whereRaw("UPPER($item) LIKE '%'||UPPER('" . $value . "')||'%'");
                    }
                    if ($item == 'email') {
                        $relationship->whereRaw("UPPER($item) LIKE '%'||UPPER('" . $value . "')||'%'");
                    }
                } else {
                    $relationship->whereRaw("UPPER($item) LIKE '%'||UPPER('" . $value . "')||'%'");
                }
            }
        }
        $page  = ($item === 'per_pege') ? $page = $value : $page = 10;
        return $relationship->orderBy('name')->withTrashed()->paginate($page);
    }

    public function listUsers(array $data)
    {
        $per_page = isset($data['per_page']) ? $data['per_page'] :  10;
        $relationship =  $this->user
            // ->with($this->listUser)
            ->select('id', 'name','email', 'deleted_at');

        foreach ($data as $item => $value) {
            if ($item == 'page' || $item == 'per_page') {
                continue;
            } elseif ($item == 'name') {
                $value = mb_strtoupper($value, 'UTF-8');
                $relationship->where($item, 'LIKE',  "%$value%");
            } else {
                $relationship->whereRaw("UPPER($item) LIKE '%'||UPPER('" . $value . "')||'%'");
            }
        }

        return $relationship->withTrashed()->orderBy('id', 'desc')->paginate($per_page);
    }

    private function loadRelationships($query)
    {
        return $query->with($this->listUser);
    }
}
