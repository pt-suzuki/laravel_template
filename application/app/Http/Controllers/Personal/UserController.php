<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\User;
use App\Services\Personal\UserService;
use App\Translaters\Personal\UserTranslater;

/**
 * アカウントへのリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class UserController extends Controller
{

    /**
     * アカウントを新規登録する
     * 登録した携帯番号に認証コードを生成しSMSを送信する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $user = UserTranslater::parceRequest($request);

        return UserService::storeUser($user,$request->input("terminal_number"));
    }

    /**
     * アカウントの詳細情報を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param  int  $id
     */
    public function show()
    {

        return "OK";
    }

    /**
     * ログイン者のアカウントの詳細情報を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param  int  $id
     * @return JsonResponse
     */
    public function showAuthUser(Request $request)
    {
        $user = User::find($request->user()->id);
        return $user->toJson();
    }

    /**
     * アカウントの内容を更新する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $user = $this->setRequest(User::find($id),$request);
        $user->updated();
    }
}
