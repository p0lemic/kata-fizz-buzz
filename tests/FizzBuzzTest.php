<?php

declare(strict_types=1);

namespace Test;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class FizzBuzzTest extends TestCase
{
    public function testReturnsNumberForNonMultiples(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach (range(1, 100) as $i) {
            if (0 === $i % 5) {
                continue;
            }

            if (0 === $i % 3) {
                continue;
            }

            $this->assertEquals($i, $fizzBuzz($i));
        }
    }

    public function testReturnsFizzWhenIsDivisibleByThree(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([3, 6, 9, 12, 18, 21] as $number) {
            $this->assertEquals('Fizz', $fizzBuzz($number));
        }
    }

    public function testReturnsBuzzWhenIsDivisibleByFive(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([5, 10, 20, 25] as $number) {
            $this->assertEquals('Buzz', $fizzBuzz($number));
        }
    }

    public function testReturnsFizzBuzzWhenIsDivisibleByThreeAndFive(): void
    {
        $fizzBuzz = new FizzBuzz();

        foreach ([15, 30] as $number) {
            $this->assertEquals('FizzBuzz', $fizzBuzz($number));
        }
    }

    /**
     * @dataProvider invalidInputProvider
     */
    public function testThrowsExceptionOnInvalidInput(int $invalidInput): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->expectException(\InvalidArgumentException::class);
        $fizzBuzz($invalidInput);
    }

    public static function invalidInputProvider(): array
    {
        return [
            [0],
            [-1],
            [101]
        ];
    }
}
