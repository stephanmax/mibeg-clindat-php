<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

define("DATABASE_FILE", "trees.sqlite");
$connection = new PDO("sqlite:" . DATABASE_FILE);

$sql = "SELECT DISTINCT germanName FROM trees";
$stmtTreeNames = $connection->prepare($sql);
$stmtTreeNames->execute();

if ($isSubmitted) {
    $nameSearch = filter_input(INPUT_POST, "germanName");

    $sql = "SELECT germanName, height FROM trees WHERE germanName = ?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$nameSearch]);

    $sql = "SELECT COUNT(*) FROM trees WHERE germanName = ?";
    $stmtResults = $connection->prepare($sql);
    $stmtResults->execute([$nameSearch]);
}
?>

<!doctype html>
<head>
    <title>Baumkataster Köln 2020</title>
    <style>
        body {
            font-family: sans-serif;
        }
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
        <select name="germanName">
            <?php while ($row = $stmtTreeNames->fetch()): ?>
                <option value="<?= $row["germanName"] ?>"><?= $row["germanName"] ?></option>
            <?php endwhile; ?>
        </select>
        <input type="submit">
    </form>

    <p><b><?= $stmtResults->fetchColumn() ?></b> Ergebnisse</p>

    <?php if ($isSubmitted): ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Höhe</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $stmt->fetch()): ?>

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