<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Library\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testtoFizzBuzzNass()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzBuzz->toFizzBuzzNass(15));
    }
}
