<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $service;

    function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        // return $this->service->getAll();
        return User::get();
    }

    public function getAllUsers(Request $request)
    {
        return $this->service->getAll();
        // return User::get();
    }

    public function listUsers(Request $request)
    {
        // return $this->service->listUsers($request);
        return User::get()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ];
        }); 
    }
}
