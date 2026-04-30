<?php
define("DATABASE_FILE", "trees.sqlite");

$connection = new PDO("sqlite:" . DATABASE_FILE);

$sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
$stmt = $connection->prepare($sql); // 2
$stmt->execute(["minHeight" => 30]); // 3

$sql = "SELECT COUNT(*) FROM trees WHERE height > :minHeight"; // 1
$stmt2 = $connection->prepare($sql); // 2
$stmt2->execute(["minHeight" => 30]); // 3

echo "<p>Ergebnisse: {$stmt2->fetchColumn()}</p>";

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

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Höhe</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($row = $stmt->fetch()): // { ?>

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
</body>
</html>