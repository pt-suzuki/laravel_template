<?php

namespace App\Http\Controllers\RecommendSearch;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * 動画のリクエストを処理するコントローラ
 *
 * @author takuya.suzuki
 * @since 2018/4/26
 *
 */
class MovieController extends Controller
{

    /**
     * 動画の詳細情報を返す
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
        $response["name"] = "動画1";
        $response["movie_url"] = "movie3.mp4";
        $response["detail"] = "詳細";

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * 条件に合致する動画の一覧を返す
     * 条件の入力がない場合は最新の10件を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){
        $response = array();

        $item = array();
        $item["id"] = 1;
        $item["name"] = "動画1";
        $item["code"] = "識別コード";
        $item["sumnail_url"] = "image.jpg";

        $response["data"]["0"] = $item;

        $item = array();
        $item["id"] = 2;
        $item["name"] = "動画2";
        $item["code"] = "識別コード";
        $item["sumnail_url"] = "image.jpg";

        $response["data"]["1"] = $item;

        $item = array();
        $item["id"] = 3;
        $item["name"] = "動画3";
        $item["code"] = "識別コード";
        $item["sumnail_url"] = "image.jpg";

        $response["data"]["2"] = $item;

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }
}
