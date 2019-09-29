<?php


namespace App\Helper;


class Helper
{

    public static function getIp()
    {
        return request()->ip();
    }
}
