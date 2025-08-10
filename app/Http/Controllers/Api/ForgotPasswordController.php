<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordFormRequest;
use App\Http\Requests\ValidTokenFormRequest;
use App\Services\ForgotPasswordService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    private $forgotPasswordService;

    function __construct(ForgotPasswordService $forgotPasswordService)
    {
        $this->forgotPasswordService = $forgotPasswordService;
    }

    public function sendEmail(Request $request): JsonResponse
    {
        $request->validated();
        $this->forgotPasswordService->sendEmail($request->all());
        return response()->json(['message' =>'Enviamos o link de redefinição de senha por e-mail!'], 200);
    }

    public function validToken(Request $request): JsonResponse
    {
        $request->validated();
        $this->forgotPasswordService->validToken($request->all());
        return response()->json(['message' => 'O seu código é válido!'], 200);
    }

    public function resetPassword(Request $request): JsonResponse
    {
        $request->validated();
        $this->forgotPasswordService->resetPassword($request->all());
        return response()->json(['message' => 'Sua senha foi alterada!'], 200);
    }

}
