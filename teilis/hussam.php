<?php

function checkWord($nwort, $guess) {
    $antwort = "";
    for ($x = 0; $x < strlen($guess); $x++) {
        if ($nwort[$x] === $guess[$x]) {
            $antwort .= " $nwort[$x]";
        }
        elseif (str_contains($guess, $nwort[$x])) {
            $antwort .= " 🟨";
        }
        else {
            $antwort .= " ❌"; 
        }
    }

    return $antwort;
}

print "  **************************\n  ** Willkommen in Wordle **\n  **************************\n " ;
$worter = [
"april"     => "Es ist ein Monat im Jahr (5 Buchstaben)",
"brezel"    => "Ein beliebtes deutsches Gebäck (6 Buchstaben)",
"aprikose"  => "Eine gelb-orange Frucht, die im Sommer wächst (7 Buchstaben)",
"gladiator" => "Ein berühmter historischer Actionfilm aus Hollywood (9 Buchstaben)",
"seppuku"   => "Ein ritueller Selbstmord der Samurai im alten Japan (7 Buchstaben)",
];

$keys = array_keys($worter);
$lvl = (int)readline("Bitte wählen Sie den Schwierigkeitsgrad (1-5): :") - 1;
$guess = $keys[$lvl];
$hint = $worter[$guess];

print " Hinweis :" . $hint . PHP_EOL ;

for ($i=0; $i < 6 ; $i++) {
    $nwort = strtolower((string)readline(" Der wort ist: "));
    if (strlen($nwort)!== strlen($guess)) {
        print " Geben Sie ein Wort mit " . strlen($guess) . " Buchstaben bitte ein\n";
    }
    elseif ($nwort === $guess) {
        print "Wunderbar, du hast es geschafft. 😃\n";
        break;
    }
    else {
        print checkWord($nwort, $guess) . PHP_EOL;
    }
    if ($i === 5) {
        print "Leider sind deine Versuche aufgebraucht. 😢" . PHP_EOL ;
    }
}