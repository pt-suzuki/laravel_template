<?php
namespace App\Utils;

/**
 * ランダムの文字列を生成するクラス
 *
 * @since 2018/4/26
 * @author takuya.suzuzki
 *
 */
class RandomStringCreation
{
    /**
     * 指定した桁数の乱数を生成する
     *
     * @param integer $length 生成する桁数
     * @return integer 乱数
     */
    public static function getRandomNumber($length) : int{
        $str = array_merge(range('0', '9'));
        $r_str = null;
        for ($i = 0; $i < $length; $i++) {
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }
}

