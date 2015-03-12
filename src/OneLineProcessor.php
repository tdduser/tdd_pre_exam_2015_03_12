<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 17:03
 */

namespace Tdd;


class OneLineProcessor extends ProcessorAbstract
{

    function isMatch($string)
    {
        return true;
    }

    function process($string)
    {
        return explode(',', $string);
    }
}