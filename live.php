<?php

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$min = $arr[0];
$max = $arr[0];

/*
Iteration 1: $min = 5, $max = 5, $num = 5
    $min = 5, $max = 5

Iteration 2: $min = 5, $max = 5, $num = 42
    $min = 5, $max = 42, $num = 5
*/

foreach ($arr as $num) {
    if ($num > $max) {
        $max = $num;
    }
    if ($num < $min) {
        $min = $num;
    }
}

print "Min: " . $min . "\nMax: " . $max . PHP_EOL;