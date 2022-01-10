<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

const TASK_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEvenGame()
{
    runGame(TASK_DESCRIPTION, getTaskAndAnswer());
}

function getTaskAndAnswer(): \Closure
{
    return function () {
        $randomNumber = rand(0, 100);

        $result = [];
        $result[] = $randomNumber;
        $result[] = $randomNumber % 2 === 0 ? 'yes' : 'no';

        return $result;
    };
}
