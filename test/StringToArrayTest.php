<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 16:17
 */

namespace Tdd\Test;
use Tdd\MultiLineProcessor;
use Tdd\OneLineProcessor;
use Tdd\StringToArray;

class StringToArrayTest extends \PHPUnit_Framework_TestCase
{
    public $stringToArray;

    public function setUp()
    {
        $this->stringToArray = new StringToArray();
    }

    public function testStringToArrayExists()
    {
        $this->assertEquals(get_class($this->stringToArray), 'Tdd\StringToArray');
    }

    public function testWorkWithRightString()
    {
        $this->stringToArray->setProcessedString('a,b,c');
        $this->assertEquals($this->stringToArray->getProcessedString(), 'a,b,c');
    }

    /**
     * @dataProvider methodsDataProvider
     */
    public function testMethodsExists($methodName)
    {
        $this->assertTrue(method_exists($this->stringToArray, $methodName));
    }

    public function methodsDataProvider()
    {
        return array(
            array("get"),
            array("setProcessedString"),
            array("getProcessedString"),
            array("addProcessor")
        );
    }

    /**
     * @dataProvider processedStringsDataProvider
     */
    public function testProcessedStringIsString($processedString)
    {
        $this->stringToArray->setProcessedString($processedString);
        $this->assertTrue(is_string($this->stringToArray->getProcessedString()));
    }

    public function processedStringsDataProvider()
    {
        return array(
            array("abc,dfdf,erewr"),
            array("ewrwrwe"),
        );
    }

    public function testCanAddProcessor()
    {
        $oneLineProcessor = new OneLineProcessor();

        $this->stringToArray->addProcessor(1, $oneLineProcessor);

        $this->assertEquals(1, count($this->stringToArray->getProcessors()));
    }

    public function testGetWithOneLineString()
    {
        $oneLineProcessor   = new OneLineProcessor();
        $multiLineProcessor = new MultiLineProcessor();

        $this->stringToArray->addProcessor(1, $oneLineProcessor);
        $this->stringToArray->addProcessor(2, $multiLineProcessor);

        $this->stringToArray->setProcessedString('abc,def');

        $this->assertEquals(array('abc', 'def'), $this->stringToArray->get());
    }

    public function testGetWithTwoLineString()
    {
        $oneLineProcessor   = new OneLineProcessor();
        $multiLineProcessor = new MultiLineProcessor();

        $this->stringToArray->addProcessor(1, $oneLineProcessor);
        $this->stringToArray->addProcessor(2, $multiLineProcessor);

        $this->stringToArray->setProcessedString("abc,def\nttt,ggg");

        $this->assertEquals(array(
            array('abc,def', 'ttt,ggg'),
            array(
                array('abc', 'def'),
                array('ttt', 'ggg')
            )
        ), $this->stringToArray->get());
    }
}
