# Brain Games

[![Actions Status](https://github.com/absque96/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/absque96/php-project-lvl1/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/a99a88d28ad37a79dbf6/maintainability)](https://codeclimate.com/github/codeclimate/codeclimate/maintainability)
[![linter](https://github.com/absque96/php-project-lvl1/actions/workflows/linter.yml/badge.svg)](https://github.com/absque96/php-project-lvl1/actions/workflows/linter.yml)

## About:

Brain Games is a set of five console games. Each game asks questions, after three correct answers the game is considered completed.

```
git clone git@github.com:unendingfebruary/php-project-lvl1.git
make install
```

## Games:

### Even

Definition of an even number.

Example:

```
make brain-even

Welcome to the Brain Game!
May I have your name?: Alyona
Hello, Alyona!
Answer "yes" if the number is even, otherwise answer "no".
Question: 75
Your answer: no # enter an answer
Correct!
Question: 50
Your answer: yes # enter an answer
Correct!
Question: 2
Your answer: yes # enter an answer
Correct!
Congratulations, Alyona!
```

### Calculator

Arithmetic expressions to be evaluated.

Example:

```
make brain-calc

Welcome to the Brain Game!
May I have your name?: Alyona
Hello, Alyona!
What is the result of the expression?
Question: 11 - 13
Your answer: -2 # enter an answer
Correct!
Question: 7 * 13
Your answer: 91 # enter an answer
Correct!
Question: 27 + 20
Your answer: 47 # enter an answer
Correct!
Congratulations, Alyona!
```

### GCD

Finding the greatest common divisor.

Example:

```
make brain-gcd

Welcome to the Brain Game!
May I have your name?: Alyona
Hello, Alyona!
Find the greatest common divisor of given numbers.
Question: 44 44
Your answer: 44 # enter an answer
Correct!
Question: 28 46
Your answer: 2 # enter an answer
Correct!
Question: 31 14
Your answer: 1 # enter an answer
Correct!
Congratulations, Alyona!
```

### Progression

Finding missing numbers in a sequence of numbers.

Example:

```
make brain-progression

Welcome to the Brain Game!
May I have your name?: Alyona
Hello, Alyona!
What number is missing in the progression?
Question: 11 21 31 41 51 61 .. 81 91 101
Your answer: 71 # enter an answer
Correct!
Question: 6 11 16 21 26 .. 36 41 46 51
Your answer: 31 # enter an answer
Correct!
Question: 6 .. 14 18 22 26 30 34 38 42
Your answer: 10 # enter an answer
Correct!
Congratulations, Alyona!
```

### Prime

Prime number definition.

Example:

```
make brain-prime

Welcome to the Brain Game!
May I have your name?: Alyona
Hello, Alyona!
Answer "yes" if given number is prime. Otherwise answer "no".
Question: 92
Your answer: yes # enter an answer
'yes' is wrong answer ;(. Correct answer was 'no'.
Let's try again, Alyona!
```
