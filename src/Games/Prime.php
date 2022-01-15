<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

const TASK_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startPrimeGame()
{
    runGame(TASK_DESCRIPTION, getTaskAndAnswer());
}

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function getTaskAndAnswer(): \Closure
{
    return function () {
        $number = rand(0, 100);

        $result = [];
        $result[] = "{$number}";
        $result[] = isPrime($number) ? 'yes' : 'no';

        return $result;
    };
}
