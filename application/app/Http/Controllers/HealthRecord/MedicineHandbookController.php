<?php

namespace App\Http\Controllers\HealthRecord;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * お薬手帳に関するリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class MedicineHandbookController extends Controller
{

    /**
     * お薬手帳の詳細情報を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        //
    }

    /**
     * 条件に合致するお薬手帳の一覧を返す
     *
     * @since 2018/5/1
     * @author takuya
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){

    }
}
