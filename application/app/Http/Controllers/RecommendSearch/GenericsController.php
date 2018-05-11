<?php

namespace App\Http\Controllers\RecommendSearch;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * 最新ジェネリック情報へのリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class GenericsController extends Controller
{
    /**
     *　最新ジェネリック情報を新規登録する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 最新ジェネリック情報の詳細情報を返す
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
        $response["name"] = "ジェネリック１";
        $response["maker"] = "東和薬品";
        $response["image_url"] = "image.jpg";
        $response["detail"] = "詳細";
        $response["code"] = "識別コード";
        $response["price"] = "1000";

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * 条件に合致する最新ジェネリック情報を一覧で返す
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
        $item["name"] = "ジェネリック１";
        $item["maker"] = "東和薬品";
        $item["image_url"] = "image1.jpg";
        $item["price"] = "1000";

        $response["data"]["0"] = $item;

        $item = array();
        $item["id"] = 2;
        $item["name"] = "ジェネリック2";
        $item["maker"] = "東和薬品";
        $item["image_url"] = "image2.jpg";
        $item["price"] = "1100";

        $response["data"]["1"] = $item;

        $item = array();
        $item["id"] = 3;
        $item["name"] = "ジェネリック3";
        $item["maker"] = "東和薬品";
        $item["image_url"] = "image3.jpg";
        $item["price"] = "1200";

        $response["data"]["2"] = $item;

        return response()->json($response,200,[],JSON_UNESCAPED_UNICODE);
    }
}
