<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 16:25
 */

namespace Tdd;


class StringToArray
{
    private $processedString;

    public function __construct($processedString)
    {
        $this->processedString = $processedString;
    }

    public function getProcessedString()
    {
        return $this->processedString;
    }
}