<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use Illuminate\Http\Request;

abstract class UserController extends CrudController
{
    private $service;

    function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function listUsers(Request $request)
    {
        return $this->service->listUsers($request);
    }
}
