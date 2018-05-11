<?php
namespace App\Validaters;

use App\Enums\ErrorCode;

/**
 * 検証をハンドリングするクラス
 *
 * @author takuya
 * @since 2018/5/11
 *
 */
class ValidateHandler
{
    /**
     * 検証を実行し、NGとしたすべてのErrorCodeを返す
     * 全てOKの場合空の配列を返す
     *
     * @param IValidater[] $validater_list
     * @return ErrorCode[]
     */
    public static function execute_all($validater_list) : array{
        $error = array();

        foreach ($validater_list as $validater){
            if(!$validater->execute()){
                $error[] = $validater->getError();
            }
        }
        return $error;
    }

    /**
     * 検証を実行し、NGのErrorCodeを返す。
     * 複数ある場合最初のコードを返す
     * 全てOKの場合nullを返す
     *
     * @param IValidater[] $validater_list
     * @return ErrorCode|null
     */
    public static function execute($validater_list) : array{
        foreach ($validater_list as $validater){
            if(!$validater->execute()){
                return  $validater->getError();
            }
        }
        return null;
    }
}

