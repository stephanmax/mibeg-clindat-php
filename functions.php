<?php
// $var = 5;
// print "Diese Variable kommt aus functions.php: $var\n";

// function <name>(<parameter>): <return_typ> { … }
function which_is_smaller(int|float $n1, int|float $n2): int|float|null {
	if ($n1 < $n2) {
        // Seiteneffekt
    	// print "$n1 ist kleiner";
        return $n1;
    }
    elseif ($n2 < $n1) {
        return $n2;
    }
    else {
    	print "$n1 und $n2 sind identisch. Keine Antwort.";
        return NULL;
    }
}

// Aufgabe 1: return true/false whether $word is a palindrome
function isPalindrome(string $word): bool {
    $wordLowerAlpha = preg_replace("/[^a-z]/", "", strtolower($word));
    return $wordLowerAlpha === strrev($wordLowerAlpha);
}

// Aufgabe 2: return "even" or "odd"
// Bonuspunkte wenn nur eine Zeile Code und keine extra Variablen benötigt wird
function evenOrOdd(int $num): string {
    return $num % 2 === 1 ? "odd" : "even";
}

function greeter(string $name, string $greeting = "Hello,") {
    print "$greeting $name!";
}

// Pass-by-value vs. pass-by-reference
function increment(int $num) {
    $num = 1337;
    print "\$num innerhalb Funktion: $num\n";
}

/*

...#...
..###..
.#####.
#######
...#...

*/

function makeTannenbaum(int $width, string $background = " ", int $trunkHeight = 1, string $tree = "#") {
    // Bit of a lazy workaround…
    // What do *you* do with even $width?
    $oddWidth = evenOrOdd($width) === "odd" ? $width : $width + 1;

    for ($i=1; $i <= $oddWidth; $i += 2) { 
        $level = str_pad("", $i, $tree, STR_PAD_LEFT);
        print str_pad($level, $oddWidth, $background, STR_PAD_BOTH) . PHP_EOL;
    }

    for ($i=0; $i < $trunkHeight; $i++) { 
        print str_pad($tree, $oddWidth, $background, STR_PAD_BOTH) . PHP_EOL;
    }
}