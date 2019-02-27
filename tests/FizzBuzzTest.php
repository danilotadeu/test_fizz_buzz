<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    const STRING_RESULT = '1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17';

    public function testFizzBuzz()
    {
        $fizzBuzz = new \FizzBuzz\FizzBuzz;
        $result = $fizzBuzz->getFizzBuzz(17);

        $this->assertEquals(FizzBuzzTest::STRING_RESULT, $result);
    }
}