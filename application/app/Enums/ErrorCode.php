<?php
namespace App\Enums;

/**
 *
 *
 * @author takuya
 */
class ErrorCode extends Enum
{
    /**
     * 名称未入力
     */
    const ACCOUNT_NOT_INPUT = "1001";
    const PASSWORD_NOT_INPUT = "1002";
    const TERMINAL_NUMBER_ALREADY_REGISTRATION = "1003";
    const INVAILD_REQUEST = "9999";

    protected static function getValueList(): array
    {
        $list = array();
        $list[self::ACCOUNT_NOT_INPUT] = array("message" => "アカウント名が入力されていません。");
        $list[self::PASSWORD_NOT_INPUT] = array("message" => "パスワードが入力されていません。");
        $list[self::TERMINAL_NUMBER_ALREADY_REGISTRATION] = array("message" => "端末に関連したユーザーが既に登録されています");
        $list[self::INVAILD_REQUEST] = array("message" => "不正なリクエストです");

        return $list;
    }

    public function getMessage(){
        return $list["message"];
    }
}

