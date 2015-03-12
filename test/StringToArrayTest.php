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
        $this->stringToArray = new StringToArray("a,b,c");
    }

    public function testStringToArrayExists()
    {
        $this->assertEquals(get_class($this->$stringToArray), 'Tdd\StringToArray');
    }

    public function testWorkWithRightString()
    {
        $this->assertEquals($this->stringToArray->getProcessedString(), 'a,b,c');
    }


}
