<?php

// $land = "Schweiz";

// $hauptstadt = match ($land) {
//     "Syrien" => "Damaskus",
//     "Russland" => "Moskau",
//     "Ukraine" => "Kiew",
//     "Kamerun" => "Yaoundé",
//     "Deutschland" => "Berlin",
//     default => "Sorry, dieses Land ist nicht mit im Videocall."
// };

// print $hauptstadt . PHP_EOL;

// ---

// $personAge = 3;

// // konditional ? true Pfad : false Pfad

// $oldEnough = $personAge >= 18
//     ? "Du bist volljährig, komm rein!"
//     : "Du bist zu jung.";

// print $oldEnough . PHP_EOL;

function which_is_smaller($n1, $n2) {
	if ($n1 < $n2) {
    	return $n1;
    }
    elseif ($n1 === $n2) {
        return "Die beiden Zahlen sind gleich.";
    }
    else {
    	return $n2;
    }
}