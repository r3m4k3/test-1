<?php

namespace Tests\AppBundle\Util;

use AppBundle\Util\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function add($a, $b)
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        $this->assertEquals(42, $result);
    }
}