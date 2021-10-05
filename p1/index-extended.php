<?php
# controller 

$board = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25); #prevent error beyond end of array

// var_dump($board);
$playerAturn = [];
$playerBturn = [];
# divide the board into even and odd positions
# variation 4 - dynamic variables
foreach ($board as $key => $move) {
    if ($key % 2 == 0) {
        $moveTo = 'oddSpot';
    } else {
        $moveTo = 'evenSpot';
    }
    $$moveTo[] = array_pop($board);
}
// var_dump($oddSpot);
// var_dump($evenSpot);
shuffle($board);
# variation 5 while loop to take turns up until 25
$moveTo = 'player';
while (count($board) > 0) {
    if ($moveTo == 'player A') {
        $playerAturn[] = array_pop($board);
        $moveTo = 'player B';
    } else {
        $playerBturn[] = array_pop($board);
        $moveTo = 'player';
    }
}


// assign unique position array elements to odd numbers


// $spots = array($begin, $magic, $bonus1, $curse, $mystic, $wild, $bonus2, $beware, $goal);
// multi-dimensional associative array key value pairs for unique spots
/* NOTE: find correct syntax for error free multiplication and division */
$spot_values = [
    'begin' => [
        'count' => 1,
        'value' => 1
    ],
    'magic' => [
        'count' => 5,
        'value' => 10
    ],
    'bonus1' => [
        'count' => 7,
        'value' => +3 < 12
    ], 'curse' => [
        'count' => 9,
        'value' => -2
    ],
    'mystic' => [
        'count' => 13,
        'value' => -1 < 13 or +1 > 13 or -5 > 7 or +5 < 19
    ], 'wild' => [
        'count' => 17,
        'value' => -2 > 10 or +2 < 20 or +1 or -1
    ], 'bonus2' => [
        'count' => 19,
        'value' => +2
    ],
    'beware' => [
        'count' => 21,
        'value' => -10
    ],
    'goal' => [
        'count' => 25,
        'value' => +1
    ]
];

# Random number turn for loop to iterate to next turn until reach 25
// $playerA = $move[rand(0, 25)];
// $playerB;

$turns;
$winner;
$playerA = 0;
// $playerB = 0;

# totalMoves = 0;

# Decide the winner
if ($playerA == '$move[rand(0, 25)]') {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}

require 'index-extended-view.php';