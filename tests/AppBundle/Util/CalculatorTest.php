<?php

namespace Tests\AppBundle\Util;

use AppBundle\Util\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_add()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        $this->assertEquals(42, $result);
    }

    // albo

    /**
     * @test
     * @param $a
     * @param $b
     */
    public function add()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        $this->assertEquals(42, $result);
    }
}
