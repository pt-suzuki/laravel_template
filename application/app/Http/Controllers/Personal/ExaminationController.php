<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * 審査情報へのリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class ExaminationController extends Controller
{
    /**
     * 審査情報を新規登録する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $response = array();

        $response["result"] = "200";
        $response["errormessage"] = "";
        $response["uuid"] = "5";

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }
}
