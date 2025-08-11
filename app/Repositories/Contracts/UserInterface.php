<?php

namespace App\Repositories\Contracts;

interface UserInterface
{
    public function storeUser(array $request);

    public function login(object $request);

    public function loggedInUser($request);

    public function logout($request);

    public function updatePassword(string $email, string $password);
}