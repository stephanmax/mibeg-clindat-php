<?php
// Variablen in lowerCamelCase
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

// Funktionen in snake_case
// function is_submitted() {}

if ($isSubmitted) {
    $minHeight = filter_input(INPUT_POST, "height");

    // 1
    $connection = new PDO("sqlite:trees.sqlite");

    // 2
    $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // a
    $stmtTrees = $connection->prepare($sql); // b
    $stmtTrees->execute(["minHeight" => $minHeight]); // c

    // 2
    $sql = "SELECT COUNT(*) FROM trees WHERE height > :minHeight"; // a
    $stmtNumberOfResults = $connection->prepare($sql); // b
    $stmtNumberOfResults->execute(["minHeight" => $minHeight]); // c
}
?>

<!doctype html>
<head>
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
        tbody > tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }
    </style>
</head>
<body>
    <h1>Bäume in Köln</h1>
    <p>Suchen Sie nach Bäumen einer bestimmten Größe:</p>
    <form method="post">
        <input name="height" value="<?= $minHeight ?>" type="number" placeholder="Größe in m">
        <input type="submit">
    </form>

    <?php if ($isSubmitted): ?>
    <!-- 3 -->
    <p><b><?= $stmtNumberOfResults->fetchColumn() ?></b> Ergebnisse</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Höhe</th>
            </tr>
        </thead>
        <tbody>

            <!-- 3 -->
            <?php while ($row = $stmtTrees->fetch()): ?>

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