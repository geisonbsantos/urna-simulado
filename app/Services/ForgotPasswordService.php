<?php

namespace App\Services;

use App\Repositories\Core\PasswordResetRepository;
use App\Exceptions\CodeException;
use App\Repositories\Contracts\ForgotPasswordInterface;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordService implements ForgotPasswordInterface
{
    public function __construct(private PasswordResetRepository $repository, private UserService $userService) {}

    public function sendEmail(array $request): void
    {
        $data = [
            'email' => $request['email'],
            'token' => Str::random(5),
            'created_at' => Carbon::now()
        ];
        $this->repository->store($data);



        $email = $this->userService->findWhereFirst('email', $request['email']);

        if ($email) {
            Mail::send('email.forgetPassword', ['code' => $data['token']], function ($message) use ($request) {
                $message->to($request['email']);
                $message->subject('Resetar Senha');
            });
        }
    }

    public function findWhereTokenAndEmail(array $request)
    {
        if ($this->repository->findWhereTokenAndEmail($request['token'], $request['email']) == null) {
            throw new CodeException('O seu código é inválido!');
        } else {
            return $this->repository->findWhereTokenAndEmail($request['token'], $request['email']);
        }
    }

    public function validToken(array $request): void
    {
        $register = $this->findWhereTokenAndEmail($request);
        if (!$register) {
            throw new CodeException($register);
        }
    }

    public function resetPassword(array $request): void
    {
        $this->validToken($request);
        $this->userService->updatePassword($request['email'], $request['password']);
        $register = $this->findWhereTokenAndEmail($request);
        $register->delete();
    }
}
