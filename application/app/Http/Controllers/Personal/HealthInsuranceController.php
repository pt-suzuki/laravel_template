<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * 健康保険に関するリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class HealthInsuranceController extends Controller
{
    /**
     * 健康保険の詳細情報を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
    }

    /**
     * 条件に合致する健康保険の一覧を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){
    }
}
