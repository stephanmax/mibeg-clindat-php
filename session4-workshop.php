<?php

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

$targetWord = "horse";

// Core game LOOP
do {
    // When does the player win the game?
    $success = true;
    // Get the player’s input
    $guessedWord = strtolower(readline("Type in a word: "));
    // Empty array to construct the feedback for the player
    $result = [];

    // Check every letter
    for ($i=0; $i < strlen($guessedWord); $i++) {

        // Letter is in the correct spot
        if ($guessedWord[$i] === $targetWord[$i]) {
            // Remember: This is how you add an element to an array
            // You could also use array_push()
            $result[] = "🟢";
            // Shortcut straight to the next letter
            continue;
        }

        // At least one letter is not in the correct spot
        // => that means, the game is NOT won
        $success = false;

        // Letter is part of the word, but not in that spot
        if (str_contains($targetWord, $guessedWord[$i])) {
            $result[] = "🟠";
            continue;
        }

        // Letter is not in the word at all
        $result[] = "⚫";
    }

    print implode(" ", $result) . "\n";

// If the player has not won yet, we take another loop
} while (!$success);