<?php
namespace App\Services\Auth;

use Illuminate\Support\Facades\Facade;

class AuthService extends Facade
{
    protected static function getFacadeAccessor(){
        return 'auth_servie';
    }
}

