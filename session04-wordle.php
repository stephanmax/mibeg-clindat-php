<?php

function remove_letter(string &$word, string $letter) {
    $word = preg_replace("/$letter/", "", $word, 1);
}

$words = file("./data/words.txt");

$possible_letters = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
    "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
];

// ein zufälliges Wort aus $words
// $key = array_rand($words); // key ist in diesem Fall eine Zahl
// $targetWord = $words[$key]; // Nachschlagen an Stelle key gibt uns ein Wort

// $targetWord = $words[random_int(0, array_key_last($words))];

$targetWord = strtolower(trim($words[rand(0, count($words)-1)]));

define("MAX_TRIES", 6);
define("NUM_OF_LETTERS", 5);
$try = 1;

print <<<EOT
\n=====================================
=======   Welcome to WORDLE   =======
=====================================\n

EOT;

do {
    $input = strtolower(readline("Versuch {$try}/" . MAX_TRIES . ". Wort mit " . NUM_OF_LETTERS . " Buchstaben: "));
    // Hilfsvariable zum Kaputtmachen
    $lookup = $targetWord; // z.B. "stern"
    $success = true;

    if (strlen($input) !== NUM_OF_LETTERS) {
        print "Bitte " . NUM_OF_LETTERS . " Buchstaben eingeben!\n";
        continue;
    }

    for ($i = 0; $i < NUM_OF_LETTERS; $i++) {
        // Buchstabe identisch
        if ($input[$i] === $targetWord[$i]) {
            print "\e[1;37;46m $input[$i] \e[0m ";
            remove_letter($lookup, $input[$i]);
            continue;
        }

        $success = false;

        if (str_contains($lookup, $input[$i])) {
            print "\e[1;37;45m $input[$i] \e[0m ";
            remove_letter($lookup, $input[$i]);
            continue;
        }

        // Buchstabe nicht identisch UND nicht im Wort enthalten
        print "\e[1;37;47m $input[$i] \e[0m ";

        $uppercaseLetter = strtoupper($input[$i]);
        $possible_letters[array_search($uppercaseLetter, $possible_letters)] = "\e[9m $uppercaseLetter \e[0m";
    }

    print PHP_EOL;
    print implode(" ", $possible_letters) . PHP_EOL;

    $try++;
} while (!$success and $try <= MAX_TRIES);

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

/*

S T E R N

L A T T E

⚫⚫🟡⚫🟡

---

S T A R T

L A T T E

⚫🟡🟡🟡⚫

*/