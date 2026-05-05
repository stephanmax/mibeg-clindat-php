<?php
$firstName = filter_input(INPUT_POST, "firstName");
$password = filter_input(INPUT_POST, "password");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeter</title>
</head>
<body>
    <form method="POST">
        <input name="firstName" placeholder="Name">
        <input name="password" type="password">
        <input type="submit">
    </form>

    <?php if (!is_null($firstName) && !is_null($password)): ?>
        <p><?= $firstName ?> hat sich angemeldet mit dem Passwort <?= $password ?>!</p>
    <?php endif; ?>
</body>
</html>