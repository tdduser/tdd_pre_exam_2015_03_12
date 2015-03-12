<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 16:17
 */

namespace Tdd\Test;
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
            array("getProcessedString")
        );
    }


}
