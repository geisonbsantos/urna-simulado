<?php

namespace App\Http\Middleware;

use Laravel\Sanctum\PersonalAccessToken;
use Closure;

class RefreshTokenSanctum
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $personalAccessToken = new PersonalAccessToken();
        $token = substr($request->headers->get('authorization'), 7);

        if(!$personalAccessToken->findToken($token)->created_at->gt(now()->subMinutes(20))){
            $token = auth()->user()->createToken('AccessToken')->plainTextToken;
        }

        $response->headers->set('Authorization', $token);
        return $response;
    }
}