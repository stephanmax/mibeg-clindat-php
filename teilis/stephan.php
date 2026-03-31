<?php
$word = "lagerregal";
$isPalindrome = strtolower($word) === strtolower(strrev($word));

if ($isPalindrome) {
    print "true" . PHP_EOL;
}
else {
    print "false" . PHP_EOL;
    print "Das war kein Palindrom" . PHP_EOL;
}