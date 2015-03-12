<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 16:57
 */

namespace Tdd;


abstract class ProcessorAbstract
{
    abstract function isMatch($string);
    abstract function process($string);
}