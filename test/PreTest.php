<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.03.11.
 * Time: 21:17
 */

namespace Tdd\Test;


use Tdd\PreClass;

class PreTest extends \PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $pre = new PreClass();

        $this->assertEquals(1,1);
    }
}
