<?php

namespace App\Repositories\Core;

use App\Models\ResetPassword;
use App\Repositories\Core\BaseRepository;

class PasswordResetRepository extends BaseRepository
{
    private $entity;
    private $resetPassword;

    public function __construct(ResetPassword $entity)
    {
        parent::__construct($entity);
        $this->resetPassword = $entity;
    }

    public function findWhereTokenAndEmail($token, $email)
    {
        return $this->resetPassword->where('token', '=', $token)->where('email', '=', $email)->first();
    }
}
