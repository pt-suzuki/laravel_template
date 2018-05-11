<?php
namespace App\Services\Auth;

class AuthService
{
    protected static function getFacadeAccessor(){
        return 'auth_servie';
    }
}

