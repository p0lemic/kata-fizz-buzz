<?php

declare(strict_types=1);

namespace Kata;

use InvalidArgumentException;

class FizzBuzz
{
    public function __invoke(int $number): string
    {
        $string = '';

        if ($number < 1 || $number > 100) {
            throw new InvalidArgumentException("$number is not a valid number between 1 and 100.");
        }

        if ($number % 3 === 0) {
            $string .= 'Fizz';
        }

        if ($number % 5 === 0) {
            $string .= 'Buzz';
        }

        return $string ?: (string)$number;
    }
}
