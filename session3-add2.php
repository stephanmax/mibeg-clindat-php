<?php

/*
Zahlenratespiel
===============

Der Computer wählt zufällig eine Zahl zwischen 1 und 100 und der Spieler muss diese Zahl erraten.

Sobald der Spieler die Zahl erraten hat, soll sich das Programm beenden.
*/

print "Ich denke an eine Zahl zwischen 1 und 100. Erraten Sie sie!\n";
$secret = rand(1, 100);

while (true) {
    print $secret;
    $guess = (int)readline("Ist die Zahl vielleicht: ");

    if ($guess !== $secret) {
        // Zahl wurde noch nicht erraten
        if ($guess > $secret) {
            print "Ihre Zahl ist zu groß!\n";
        }
        else {
            print "Ihre Zahl ist zu klein!\n";
        }

        if (abs($guess - $secret) <= 10) {
            print "Aber du bist schon sehr nah dran!" . PHP_EOL;
        }
    }
    else {
        print "Sie haben die Zahl erraten 🎉\n";
        break;
    }
}