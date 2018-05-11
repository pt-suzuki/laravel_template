<?php

namespace App\Http\Controllers\RecommendSearch;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * お知らせのリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class NewsController extends Controller
{

    /**
     * お知らせの詳細情報を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        $response = array();

        $response["id"] = $id;
        $response["name"] = "おしらせ1";
        $response["sumnail_url"] = "image.jpg";
        $response["code"] = "識別コード";

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * 条件に合致するお知らせの一覧を返す
     * 条件がない場合は最新の10件を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){

    }
}
