<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 17:38
 */

namespace Tdd;


class MultiLineProcessor extends ProcessorAbstract
{

    function isMatch($string)
    {
        if (strpos($string, "\n") !== false) return true;

        return false;
    }

    function process($string)
    {
        // TODO: Implement process() method.
    }
}