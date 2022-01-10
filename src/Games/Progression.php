<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

const TASK_DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function startProgressionGame()
{
    runGame(TASK_DESCRIPTION, getTaskAndAnswer());
}

function getProgressionArray(): array
{
    $startNumber = rand(1, 20);
    $progressionStep = rand(1, 10);
    $result = [$startNumber];

    while (count($result) < PROGRESSION_LENGTH) {
        $result[] = $result[count($result) - 1] + $progressionStep;
    }

    return $result;
}

function getTaskAndAnswer(): \Closure
{
    return function () {
        $progression = getProgressionArray();
        $randomNumber = rand(0, count($progression) - 1);
        $progressionItem = $progression[$randomNumber];
        $progression[$randomNumber] = '..';

        $result = [];
        $result[] = implode(' ', $progression);
        $result[] = (string) $progressionItem;

        return $result;
    };
}
