<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.12.
 * Time: 17:35
 */

namespace Tdd\Test;

use Tdd\MultiLineProcessor;


class MultiLineProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider matchStingsDataProvider
     */
    public function testIsMatch($string)
    {
        $multiLine = new MultiLineProcessor();

        $this->assertTrue($multiLine->isMatch($string));
    }

    public function matchStingsDataProvider()
    {
        return array(
            array("abc,dfdf,erewr\nfdfd,hjhjhj"),
        );
    }

    public function testProcess()
    {
        $multiLine = new MultiLineProcessor();

        $processedArray = $multiLine->process("abc,def\nttt,ggg");

        $this->assertEquals(
            array(
                array('abc,def', 'ttt,ggg'),
                array(
                    array('abc', 'def'),
                    array('ttt', 'ggg')
                )
            ),
            $processedArray
        );
    }
}
