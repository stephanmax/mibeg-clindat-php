<?php

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

define("PI", 3.14);

$var = 13;

function is_palindrome($word) {
    $wordLower = strtolower($word);
    $wordLettersOnly = preg_replace("/[^a-z]/", "", $wordLower);
    
    return strrev($wordLettersOnly) === $wordLettersOnly;
}

function fizzbuzz($num) {
	for ($i = 1; $i <= $num; $i++) {
		$isFizz = $i % 3 === 0;
		$isBuzz = $i % 5 === 0;
		$fizzBuzz = ($isFizz ? "fizz" : "") . ($isBuzz ? "buzz" : "");
		print (!empty($fizzBuzz) ? $fizzBuzz : $i) . PHP_EOL;
	}
}

function filter_even($num) {
    return $num % 2 === 0;
}