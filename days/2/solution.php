<?php
$input = file_get_contents(__DIR__ . "/inputs/input.txt");
$input2 = file_get_contents(__DIR__ . "/inputs/input-02.txt");

$scores = [
    "part1" => [
        "A X" => 4,
        "A Y" => 8,
        "A Z" => 3,
        "B X" => 1,
        "B Y" => 5,
        "B Z" => 9,
        "C X" => 7,
        "C Y" => 2,
        "C Z" => 6,
    ],
    "part2" => [
        "A X" => 3,
        "A Y" => 4,
        "A Z" => 8,
        "B X" => 1,
        "B Y" => 5,
        "B Z" => 9,
        "C X" => 2,
        "C Y" => 6,
        "C Z" => 7,
    ],
];

$totalScore = 0;

$allFight = array_filter(explode(PHP_EOL, $input));

function calcScore($line, $key, $type)
{
    global $scores, $totalScore;
    $totalScore += $scores[$type][$line];
}

array_walk($allFight, "calcScore", "part1");
echo "Total score: " . $totalScore . PHP_EOL;

$totalScore = 0;
$allFight = array_filter(explode(PHP_EOL, $input2));

array_walk($allFight, "calcScore", "part2");

echo "Total score 2: " . $totalScore . PHP_EOL;
