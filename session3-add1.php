<?php

// Nachtrag: Schleifen

$a = 11;

// Kopfgesteuert
while ($a <= 10) {
    # code...
}

// Fußgesteuert
do {
    # code...
} while ($a <= 10);

# Nachtrag: Typen

$var = "Hallo";
is_bool($var);

# Nachtrag: Boole‘scher Logik

# and, or, not, (xor)
# &&   ||  !

if (((!$a <= 10) and $b > 100 and $c > 1000) or $d === 100) {

}