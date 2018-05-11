<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

/**
 * 動画の閲覧記録を登録する
 *
 * @since 2018/5/1
 * @author takuya
 *
 */
class MovieViewLogController extends Controller
{
    /**
     * 動画の閲覧記録を新規登録する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request){

    }

    /**
     * 動画の閲覧記録を参照する
     *
     * @since 2018/5/1
     * @author takuya
     * @param  Request  $request
     * @return JsonResponse
     */
    public function show(int $id,Request $request){
    }
}
