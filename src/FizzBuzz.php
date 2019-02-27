<?php

namespace FizzBuzz;

class FizzBuzz
{
    public function getFizzBuzz($number)
    {
        $result = [];
        for ($i=1; $i <= $number ; $i++) {

            if ($i % 3 == 0 && $i % 5 != 0) {
                $result[] = 'Fizz';
            } elseif ($i % 5 == 0 && $i % 3 != 0) {
                $result[] = 'Buzz';
            } elseif($i % 3 == 0 && $i % 5 == 0) {
                $result[] = 'FizzBuzz';
            }else {
                $result[] = $i;
            }
        }

        return implode($result,', ');
    }
}