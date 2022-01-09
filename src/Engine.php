<?php

namespace Brain\Games\Engine;

use function Brain\Games\Cli\getUserName;
use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $description, callable $getTaskAndAnswer)
{
    $userName = getUserName();
    line($description);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$task, $expectedAnswer] = $getTaskAndAnswer();

        line("Question: %s", $task);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $expectedAnswer) {
            line('Correct!');
        } else {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'." . PHP_EOL . "Let's try again, %s!",
                $userAnswer,
                $expectedAnswer,
                $userName
            );

            return;
        }
    }

    line('Congratulations, %s!', $userName);
}
