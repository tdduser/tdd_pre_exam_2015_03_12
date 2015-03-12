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
        $result = array();

        $multiLines = explode("\n", $string);

        $result[] = $multiLines;

        $values = array();

        foreach ($multiLines as $multiLine)
        {
            $values[] = explode(',', $multiLine);
        }

        $result[] = $values;

        return $result;
    }
}