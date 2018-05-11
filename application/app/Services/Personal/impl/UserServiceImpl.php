<?php
namespace App\Services\Personal\impl;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

/**
 * 個人情報・アカウントのサービスクラスの実体
 *
 * @author takuya
 * @since 2018/5/11
 *
 */
class UserServiceImpl
{
    /**
     * 個人情報・アカウントを新規作成する
     * ハッシュ化された端末番号を関連させて保存する
     *
     * 結果はJsonで返す
     *
     * @param Request $request
     * @return string
     */
    public function storeUser(User $user,string $terminal_number) : string {
        $user->save();

        Auth::login($user);

        return $user->toJson();
    }
}

