<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

const TASK_DESCRIPTION = 'What is the result of the expression?';
const MATH_OPERATIONS = ['+', '-', '*'];

function startCalcGame()
{
    runGame(TASK_DESCRIPTION, getTaskAndAnswer());
}

function getOperationResult(int $firstNumber, int $secondNumber, string $operation)
{
    switch ($operation) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        default:
            return 'Something went wrong';
    }
}

function getTaskAndAnswer(): \Closure
{
    return function () {
        $firstNumber = rand(0, 50);
        $secondNumber = rand(0, 25);
        $operation = MATH_OPERATIONS[rand(0, count(MATH_OPERATIONS) - 1)];

        $result[] = "{$firstNumber} {$operation} {$secondNumber}";
        $result[] = (string) getOperationResult($firstNumber, $secondNumber, $operation);

        return $result;
    };
}
