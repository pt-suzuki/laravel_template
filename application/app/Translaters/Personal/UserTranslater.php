<?php
namespace App\Translaters\Personal;

use Illuminate\Http\Request;
use App\User;

/**
 * 個人情報をモデルやDtoに分割するクラス
 *
 * @since 2018/5/11
 * @author takuya
 *
 */
class UserTranslater
{
    /**
     * リクエストを分割してModelに格納する
     * 引数のモデルがnullの場合は新規作成する。
     *
     * @param Request $request
     * @param User $user
     * @return User
     */
    public static function parceRequest(Request $request, User $user = null){
        $user = $user ?: new User();

        $user->name = $request->input("name");
        $user->telephone_number = $request->input("telephone_number");

        if(!empty($request->input("password"))){
            $user->password = password_hash($request->input("password"), PASSWORD_BCRYPT);
        }

        if(!empty($request->input("email"))){
            $user->email = $request->input("email");
        }
        return $user;
    }
}

