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
}
