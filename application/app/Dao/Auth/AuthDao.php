<?php
namespace app\Dao\Auth;

use Illuminate\Support\Facades\Facade;

/**
 * 個人情報サービスのFacadeクラス
 * 実体はUserServiceImpl
 *
 * @since 2018/5/11
 * @author takuya
 *
 */
class AuthDao extends Facade
{
    protected static function getFacadeAccessor(){
        return 'auth_dao';
    }
}

