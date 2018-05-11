<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * 健康保険証の画像のリクエストを処理するコントローラー
 *
 * @author takuya
 * @since 2018/4/26
 *
 */
class InsuranceCertificateImageController extends Controller
{
    /**
     * 健康保険証の画像を保存する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
    }

    /**
     * 健康保険証の画像を更新する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id)
    {
    }
}
