<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 17:00
 */

namespace Tdd\Test;

use Tdd\OneLineProcessor;


class OneLineProcessorTest extends \PHPUnit_Framework_TestCase
{
    public $oneLineProcessor;

    public function setUp()
    {
        $this->oneLineProcessor = new OneLineProcessor();
    }

    public function testExists()
    {
        $this->assertEquals(get_class($this->oneLineProcessor), 'Tdd\OneLineProcessor');
    }

    /**
     * @dataProvider matchStingsDataProvider
     */
    public function testIsMatch($string)
    {
        $this->assertTrue($this->oneLineProcessor->isMatch($string));
    }

    public function matchStingsDataProvider()
    {
        return array(
            array("abc,dfdf,erewr"),
        );
    }

    public function testProcess()
    {
        $processedArray = $this->oneLineProcessor->process('abc,def');

        $this->assertEquals(array('abc', 'def'), $processedArray);
    }
}
