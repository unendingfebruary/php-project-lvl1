<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

const TASK_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function startGcdGame()
{
    runGame(TASK_DESCRIPTION, getTaskAndAnswer());
}

function getGcdOfNumbers(int $firstNumber, int $secondNumber)
{
    if ($firstNumber == 0 || $secondNumber == 0) {
        return abs(max(abs($firstNumber), abs($secondNumber)));
    }

    $r = $firstNumber % $secondNumber;
    return ($r != 0) ?
        getGcdOfNumbers($secondNumber, $r) :
        abs($secondNumber);
}

function getTaskAndAnswer(): \Closure
{
    return function () {
        $firstNumber = rand(0, 50);
        $secondNumber = rand(0, 50);

        $result[] = "{$firstNumber} {$secondNumber}";
        $result[] = (string) getGcdOfNumbers($firstNumber, $secondNumber);

        return $result;
    };
}
