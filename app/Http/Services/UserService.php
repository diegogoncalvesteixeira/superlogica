<?php

namespace App\Http\Services;


use App\Models\User;

class UserService
{
    public function store($name,$username,$zipCode,$email,$password)
    {
        $usuario = new User();
        $usuario->name = $name;
        $usuario->username = $username;
        $usuario->zipCode = $zipCode;
        $usuario->email = $email;
        $usuario->password = $password;
        $usuario->save();

        return $usuario;
    }
}