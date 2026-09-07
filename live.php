<?php
// Übung: Schreibe eine Funktion which_is_smaller,
// die zu zwei Zahlen die kleinere zurückgibt.









function which_is_smaller1($n1, $n2) {
	if ($n1 < $n2) {
    	return $n1;
    }
    else {
        return $n2;
    }
}


















function which_is_smaller2($n1, $n2) {
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























function which_is_smaller3($n1, $n2) {
	if ($n1 < $n2) {
    	print $n1 . PHP_EOL;
    }
    else {
        print $n2 . PHP_EOL;
    }
}

















// Mit ternärem Operator

function which_is_smaller4($n1, $n2) {
	return $n1 > $n2 ? $n1 : $n2;
}