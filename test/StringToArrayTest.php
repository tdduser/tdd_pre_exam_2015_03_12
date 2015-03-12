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
    public function testStringToArrayExists()
    {
        $stringToArray = new StringToArray("a,b,c");

        $this->assertEquals(get_class($stringToArray), 'Tdd\StringToArray');
    }
}
