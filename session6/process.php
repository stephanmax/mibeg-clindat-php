<?php

// Switch to POST
$firstName = filter_input(INPUT_GET, "firstName");

?>

<!doctype html>
<html>
    <head>
        <title>process</title>
    </head>
    <body>
        <p>Hello <?= $firstName ?>!</p>
    </body>
</html>