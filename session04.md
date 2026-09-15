# Workshop: Wordle

## Lennart

- Generate __random 5 letter word__
    - `$LWort = strtolower("Wort")`
- __Assign letters to array__
    - `$LArray = [w,o,r,t]`
- Give readline __5 letter box__ (box as a countdown from 5)
    ```php
    $i = 5;
    while ($i>0){$Input = [readline("Wort mit 5 Buchstaben")]\n, $i= $i-1;}
    ```
- Assign input to __another array__
    - Check for correct letter
    - Check for correct position
    - Give output highlighting correct letters
    - Give next readline input

## Andrea

* array mit 5 Buchstaben-Variablen-Placeholdern anlegen
* täglich ein __Wort hinterlegen__ - 365 worte hinterlegen
* __Do-Schleife__ - 6 Durchgänge
    * if richtiger Buchstabe, richtige Location, then green
    * if richtiger Buchstabe, falsche Location, then amber
    * else grey

```php
$var = (5);
$arr = [$l1, $l2, $l3, $l4, $l5];
// $arr = [A, L, I, V, E];
var_dump (arr);
```

## Anna

```
//*START "$word

versuche ← 0,   maximale
versuche ← 5
SOLANGE versuche < maximale_versuche

Eingabe tipp
WENN Länge von tipp ≠ 5
Ausgabe "Bitte 5 Buchstaben eingeben"
WEITER/ ENDE WENN

    versuche ← versuche + 1
    WENN tipp = lösungswort
        Ausgabe "Gewonnen!"
        STOP/ ENDE WENN

    FÜR jede Position von 1 bis 5
        WENN Buchstabe an dieser Position
             gleich dem Buchstaben im Lösungswort ist -> Ausgabe "Grün"
        
        SONST WENN Buchstabe im Lösungswort vorkomt -> Ausgabe "Gelb"
        
        SONSt -> Ausgabe "Grau -> ENDE WENN

    ENDE FÜR
    Ausgabe "Noch einmal versuchen"
   ENDE SOLANGE
```