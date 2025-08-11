<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LoginFormRequest;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidCredentialsFormRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Log;

class AuthController extends Controller
{
    private $service;

    function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function login(Request $request): JsonResponse
    {
        // $request->validated();
        $response = $this->service->login($request);
        return response()->json(['message' => 'Autenticado com sucesso!','token' => $response], 200);
    }

    // public function validCredentials(Request $request): JsonResponse
    // {
    //     $user = $this->service->validCredentials($request);
    //     return response()->json(['message' => 'Credenciais válidas!','user' => $user], 200);
    // }

    public function me(Request $request): Response
    {
        $response = $this->service->loggedInUser($request);
        return response($response,200);
    }

    public function logout(Request $request): Response
    {
        $this->service->logout($request);
        return response([], 204);
    }
}
