<?php
/* ein kleines wordle-spiel */

print "Welcome to the Wordle Game!" . PHP_EOL;

$system_word = "Apple"; //define a  fixed word for testing

$guestword = readline("Enter your guest wor/ add a gd: ");  //get user input

$matchingLetters = []; //an empty  array to store the results of the letter comparison
$len= strlen($system_word); // get the length of the system word 
for ($i = 0; $i < $len; $i++) { 

// loop through each letter of the system word 
// check if the letter exists in the system word and is in the correct position
//add green circle to the matchingLetters array if the letter is in the system_word and in the correct position
    if ( str_contains(strtolower($system_word),strtolower($guestword[$i] )) 
        && strtolower($system_word[$i]) === strtolower($guestword[$i])) { 
        $matchingLetters[] = "🟢"; 
    }

// look through each letter of the system_word 
// check if the letter exists in the system_word but is not in the correct position
//add yellow circle to the matchingLetters array if the letter is in the system_word and in the correct position
    elseif ( str_contains(strtolower($system_word),strtolower($guestword[$i] )) 
        && strtolower($system_word[$i]) !== strtolower($guestword[$i])) {
        $matchingLetters[] = "🟡";

    }
// if the letter does not exist in the system_word add a red circle to the matchingLetters array
    else {
            $matchingLetters[] = "🔴";
        }
}

print "Matching letters: " . implode("", $matchingLetters) . PHP_EOL;
?>