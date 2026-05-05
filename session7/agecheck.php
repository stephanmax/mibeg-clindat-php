<?php
    $isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST" && filter_has_var(INPUT_POST, "formAlterscheck");

    $age = "";
    $error = "";

    if ($isSubmitted) {
        $age = (int)(filter_input(INPUT_POST, "age"));
        if ($age < 18) {
            $error = "Sie Sind nicht volljährig. Zutritt verboten!";
        }
    }

    require_once("./templates/head.php");

    if (!$isSubmitted || $error) {
        if ($error) {
            echo '<p style="color: red">' . $error . '</p>';
        }

        require_once("./templates/form.php");
    }
    else {
        require_once("./templates/success.php");
    }

    require_once("./templates/foot.php");