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
    private $processors;

    public function setProcessedString($processedString)
    {
        $this->processedString = $processedString;
    }

    public function getProcessedString()
    {
        return $this->processedString;
    }

    public function get()
    {

    }

    public function addProcessor($priority, ProcessorAbstract $processor)
    {
        $this->processors[$priority] = $processor;
    }

    public function getProcessors()
    {
        return $this->processors;
    }
}