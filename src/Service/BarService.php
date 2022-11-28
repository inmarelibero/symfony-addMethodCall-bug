<?php

namespace App\Service;

/**
 *
 */
class BarService
{
    public static $var;

    /**
     * @param $var
     * @return void
     */
    public static function setVar($var)
    {
        static::$var = $var;
    }
}
