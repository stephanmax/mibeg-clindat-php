<?php
$handle = fopen("../data/baumbestand_koeln_2020.csv", "r");
$rowsRead = 0;
$numRows = 1000;
$sum = 0;

$headers = fgetcsv($handle, separator: ";");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmierung mit PHP</title>
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
    <table>
        <thead>
            <tr>
                <?php foreach ($headers as $header): ?>
                    <th>
                        <?= $header ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($rowsRead < $numRows && ($entries = fgetcsv($handle, separator: ";")) !== false): ?>
                <?php
                if (count($entries) === 1) {
                    continue;
                }
                ?>
                <tr>
                    <?php foreach ($entries as $entry): ?>
                        <td>
                            <?= $entry ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
                <?php
                    $rowsRead++;
                    // 15 = Spalte für Baumhöhe
                    $sum += $entries[15];
                ?>
            <?php endwhile; ?>
        </tbody>
    </table>

    <p>Die durchschnittliche Höhe der ersten <?= $numRows ?> Bäume ist <b><?= $sum/$numRows ?></b> m.</p>
</body>
</html>