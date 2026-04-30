<?php
/**
=== Frage 1 (1 Punkt, eine richtige Antwort)

Mit welchem Befehl führen Sie eine Datei index.php auf der Kommandozeile aus?

a) php -z index.php
b) php -a -d auto_prepend_file=test.php
c) php index.php
d) php -S 0.0.0.0:8080 -t index.php

Richtige Antwort: c 

=== Frage 2 (1 Punkt, eine richtige Antwort)

Mit welchem PHP-Code können Sie eine Variable definieren?

a) var = 12;
b) $var = 12;
c) define("VAR", 12); // Konstante!
d) $var = 12

Richtige Antwort: b

=== Frage 3 (1 Punkt, eine richtige Antwort)

Bei der Programmierung ist es oft hilfreich herauszufinden, welchen Wert eine Variable enthält.
Mit welchem PHP-Befehl können Sie den Wert einer Variablen $num erfahren?

a) print_content $num;
b) var_dump($num);
c) gettype($num);
d) is_string($num);

Richtige Antwort: b

=== Frage 4 (1 Punkt, eine richtige Antwort)

Welchen Text gibt der folgende PHP-Code aus:

$name = "mibeg";
print "Hallo, " . $name . "!";

a) Hallo, mibeg!
b) Hallo, $name!
c) Hallo,mibeg
d) Keine sichtbare Ausgabe

Richtige Antwort: a

=== Frage 5 (1 Punkt, eine richtige Antwort)

Wie können Sie eine einfache if/then/else-Konstruktion auch schreiben?

a) Mit einer for-Schleife
b) Mit einer switch/case-Konstruktion
c) Konditionale können ausschließlich mit if/then/else abgefragt werden
d) Mit dem ternären Operator bestehend aus ? und :

Richtige Antwort: d

=== Frage 6 (1 Punkt, eine richtige Antwort)

Welches Ergebnis liefert die folgende Funktion für den Aufruf test1(12, 12)?

function test1($a, $b) {
    if ($a < $b) {
        return 1;
    }
    elseif ($a > $b) {
        return -1;
    }

    return 0;
}

a) 1
b) -1
c) 0
d) NULL

Richtige Antwort: c

=== Frage 7 (2 Punkte, mehrere richtige Antworten)

Wie müssen Sie den folgenden Code verändern, damit alle Zahlen von 1 bis 10 ausgegeben werden?

for ($i = 0; $i <= 10; $i++) {
    // Ignorieren von Zahlen größer 4
    if ($i >= 5) {
        continue;
    }
    print $i + 1 . PHP_EOL;
}

a) Löschen des Kommentars '// Ignorieren von Zahlen größer 4' in Zeile 2
b) Löschen des if-Konditionals in den Zeilen 3 bis 5
c) Löschen der Zeile 6 'print $i . PHP_EOL;'.
d) Den Startwert der Laufvariable $i von 0 zu 1 ändern.

Richtige Antworten: b und d

=== Frage 8 (2 Punkte, Berechnung)

Welchen Wert entält die Variable $result nach Ausführung des folgenden Codes?

$numbers = [2, 3, 5, 7, 11, 13];
$result = array_reduce($numbers, fn($carry, $number) => $carry + $number, 100);

Richtige Antwort: 141

=== Frage 9 (2 Punkte, mehrere richtige Antworten)

Auf welche Weisen können Sie in PHP eine Funktion definieren, die zwei Zahlen addiert?

a)
function test2($a, $b) {
    return $a + $b;
}
b)
$test2 = fn($a, $b) => $a + $b;
c)
fun $test2(a, b) {
    a + b;
}
d)
$test2 = function($a, $b) {
    return $a - $b;
};

Richtige Antworten: a, b

=== Frage 10 (2 Punkte, mehrere richtige Antworten)

Wählen Sie alle Antworten, die in PHP ein Array definieren.

a) $letters = ["a", "b", "c"];
b) $arr = [10, true, "hello"];
c) $prices = ["banane" => 2, "tomate" => 0.5, "apfel" => 1.5];
d) $numbers = {1, 2, 3};

Richtige Antworten: a, b, c

=== Frage 11 (2 Punkte, mehrere richtige Antworten)

Welche der folgenden Hilfsmittel erleichtern Ihnen das korrekte Programmieren?

a) Hilfsmittel sind bei der Programmierung nicht zulässig, da diese die Gültigkeit des Codes zerstören.
b) Ich benutze Kommentare um den Code für mich und andere lesbarer zu machen.
c) Bevor ich mit der Programmierung anfange, überlege ich mir die einzelnen Schritte, zum Beispiel als Pseudocode.
d) Ich benutze für Variablen und andere Bezeichner sinnvolle Namen, die Rückschlüsse auf Inhalt und Verwendung zulassen.

Richtige Antworten: b, c, d

=== Frage 12 (2 Punkte, Reihenfolge)

Sie sollen mit SQLite eine Datenbank erstellen, eine Tabelle anlegen und dann eine Zeile in diese Tabelle schreiben.
Bringen Sie die folgenden Befehle in die richtige Reihenfolge und antworten Sie zum Beispiel mit: abcde

a) $stmtRow->execute(["shoes", 30]);
b) $stmtTable->execute();
c) $stmtRow = $connection->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
d) $connection = new PDO("sqlite:database.sqlite");
e) $stmtTable = $connection->prepare("CREATE TABLE IF NOT EXISTS products (id integer PRIMARY KEY, name text, price integer)");

Richtige Antwort: debca

=== Frage 13 (2 Punkte, eine richtige Antwort)

Der folgende Code generiert eine simple Webseite. Mit welchen Worten werden Besuchende der Webseite begrüßt?

<?php
    define("TITLE", "HALLO");
    $name = "da draußen!";
    $numberOfVisits = 0;
?>

<h1><?= strtolower(TITLE) ?> <?= $name ?></h1>
<p>Dies ist Ihr <?= $numberOfVisits + 1 ?>. Besuch!</p>

a) HALLO da draußen! Dies ist Ihr 1. Besuch!
b) HALLO da draußen! Dies ist Ihr 0. Besuch!
c) hallo DA DRAUẞEN!
d) hallo da draußen! Dies ist Ihr 1. Besuch!

Richtige Antwort: d
 */