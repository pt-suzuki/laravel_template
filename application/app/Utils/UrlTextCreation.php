<?php
namespace App\Utils;

class UrlTextCreation
{
    public static function getHostUrl(){
        return (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"];
    }

    public static function getUrl()
    {
        return self::getHostUrl() . $_SERVER["REQUEST_URI"];
    }
}

