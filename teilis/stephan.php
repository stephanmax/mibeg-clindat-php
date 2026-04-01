<?php
$word = "lagerregal";
$isPalindrome = strtolower($word) === strtolower(strrev($word));

if ($isPalindrome) {
    print "Das ist ein Palindrom!" . PHP_EOL;
}
else {
    print "Das war kein Palindrom" . PHP_EOL;
}