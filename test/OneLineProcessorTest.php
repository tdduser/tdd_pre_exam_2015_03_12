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
    public function testExists()
    {
        $oneLine = new OneLineProcessor();

        $this->assertEquals(get_class($oneLine), 'Tdd\OneLineProcessor');
    }
}
