<?php
function is_even() {
    $num = (int)readline("Geben Sie eine Zahl ein: ");
    
    if ($num % 2 === 0) {
        print "$num ist gerade.\n";
    }
    else {
        print "$num ist ungerade.\n";
    }
}