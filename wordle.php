<?php

$words = file("./data/wordlist-english.txt");
$targetWord = trim(strtolower($words[rand(0, count($words)-1)]));

define("MAX_TRIES", 6);
$tryNum = 1;

define("OFFSET", ord("a"));
// TODO: More robust logic how to distribute letters across these collections!
// HINT: Look into PHP’s set data structure?! (https://www.php.net/manual/de/class.ds-set.php)
$possible_letters = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
    "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
];
$correct_letters = [];
$contained_letters = [];

/**
 * 1. Set a random word $targetWord
 * 2. Welcome the player to the game
 * 3. Start loop
 *      a) Ask the player for a word $guessedWord
 *      b) Check each letter of #guessedWord whether
 *            i. It is in $targetWord and at the correct spot => 🟢
 *           ii. It is in $targetWord but in the wrong spot => 🟠
 *          iii. It is not in $targetWord at all => ⚫
 *      c) Are all letters correct? => break out of the loop
 * 4. Let the player know they won
 */

print <<<EOT
\n=====================================
=======   Welcome to WORDLE   =======
=====================================\n

EOT;

// Core game LOOP
do {
    // Empty array to construct the feedback for the player
    $result = [];
    // When does the player win the game?
    $success = true;

    // Get the player’s input
    $guessedWord = strtolower(readline("Try {$tryNum}/" . MAX_TRIES . ". Type in a word: "));

    if (strlen($guessedWord) !== 5) {
        print "Please type in 5-letter words." . PHP_EOL;
        // TODO: Better way to continue loop and wait for valid player input?
        $success = false;
        continue;
    }

    // Check every letter
    for ($i=0; $i < strlen($guessedWord); $i++) {
        $key = ord($guessedWord[$i]) - OFFSET;

        // Letter is in the correct spot
        if ($guessedWord[$i] === $targetWord[$i]) {
            // Remember: This is how you add an element to an array
            // You could also use array_push()
            $result[] = "🟢";
            $correct_letters[$key] = strtoupper($guessedWord[$i]);
            unset($possible_letters[$key]);
            unset($contained_letters[$key]);
            continue;
        }

        // At least one letter is not in the correct spot
        // => that means, the game is NOT won
        $success = false;

        // Letter is part of the word, but not in that spot
        if (str_contains($targetWord, $guessedWord[$i])) {
            $result[] = "🟠";
            $contained_letters[$key] = strtoupper($guessedWord[$i]);
            unset($possible_letters[$key]);
            continue;
        }

        // Letter is not in the word at all
        $result[] = "⚫";
        unset($possible_letters[$key]);
    }

    print implode(" ", $result) . PHP_EOL;

    print "Remaining letters: " . implode(", ", $possible_letters) . PHP_EOL;
    if ($contained_letters) {
        print "🟠 " . implode(", ", $contained_letters) . PHP_EOL;
    }
    if ($correct_letters) {
        print "🟢 " . implode(", ", $correct_letters) . PHP_EOL;
    }
    print PHP_EOL;
    $tryNum++;

// If the player has not won yet, we take another loop
} while (!$success && $tryNum <= MAX_TRIES);

if (!$success) {
    print <<<EOT
=======================================
=== Too bad! The word was '$targetWord'. ===
=======================================

EOT;
}
else {
    print <<<EOT
=====================================
=======   Congratulations!!   =======
=====================================

EOT;
}