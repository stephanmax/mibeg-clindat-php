<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

define('FILENAME', '../data/demo.db');
$connection = new PDO('sqlite:' . FILENAME);

if ($isSubmitted) {
    $nameSearch = filter_input(INPUT_POST, "germanName");

    // SQL-Anfrage um alle Bäume zu bekommen, mit dem Namen = $nameSearch, z.B. "Birke"
    $sql = "SELECT * FROM trees WHERE germanName = :searchName";
    $statement = $connection->prepare($sql);
    $statement->execute([
        "searchName" => $nameSearch
    ]);
}

$minHeight = filter_input(INPUT_GET, "h") ?? 10;

$sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
$statementResults = $connection->prepare($sql); // 2
$statementResults->execute([
    "minHeight" => $minHeight
]); // 3

$sql = "SELECT COUNT(*) as num FROM trees WHERE height > :minHeight"; // 1
$statementNumber = $connection->prepare($sql); // 2
$statementNumber->execute([
    "minHeight" => $minHeight
]); // 3
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baumkataster Köln 2020</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        th,
        td {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
        }

        tbody>tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }
    </style>
</head>
<body>
    <h1>Baumbestand in Köln 2020</h1>
    
    <p>Suchen Sie nach Bäumen mit einem bestimmten Namen:</p>

    <!-- Formular -->
    <form method="post">
        <select name="germanName" id="germanName">
            <option value="Birke">Birke</option>
            <option value="Kirsche">Kirsche</option>
            <option value="Platane">Platane</option>
        </select>
        <input type="submit" value="Suchen">
    </form>

    <?php if ($isSubmitted): ?>
        <p>Sie haben nach Bäumen mit dem Namen <b><?= $nameSearch ?></b> gesucht.</p>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Höhe</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = $statement->fetch()): ?>

                    <tr>
                        <td>
                            <?= $row["germanName"] ?>
                        </td>
                        <td>
                            <?= $row["height"] ?>
                            m
                        </td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    <?php endif; ?>
    
</body>
</html>