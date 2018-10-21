<?php
namespace App\Services\Personal;

use Illuminate\Support\Facades\Facade;

/**
 * 個人情報サービスのFacadeクラス
 * 実体はUserServiceImpl
 *
 * @since 2018/5/11
 * @author takuya
 *
 */
class UserService extends Facade
{
    protected static function getFacadeAccessor(){
        return 'user_servie';
    }
}

