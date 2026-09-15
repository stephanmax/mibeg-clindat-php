<?php

$lookup = "stern";

$letter = "t";

$removed = str_replace($letter, "", $lookup); // "sern"

var_dump($removed);