<?php

namespace Brain\Games\Even;

use function Brain\Games\Cli\getUserName;
use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function playEvenGame()
{
    $userName = getUserName();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = rand(0, 100);
        $expectedAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

        line("Question: %s", $randomNumber);
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
