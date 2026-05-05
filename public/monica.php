<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";

if ($isSubmitted) 
    $minHeight = filter_input(INPUT_POST, "height", FILTER_VALIDATE_INT);


    define("DATABASE_FILE", "trees.sqlite");

    try {
        // Stelle die Verbindung zur Datenbank her
        $connection = new PDO("sqlite:" . DATABASE_FILE);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Aktiviere Ausnahmebehandlung für Fehler

        // Abfrage der Bäume basierend auf der Höhe
        $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight";
        $stmt = $connection->prepare($sql);
        $stmt->execute(["minHeight" => $minHeight]);

        // Abfrage der Anzahl der Bäume basierend auf der Höhe
        $sql2 = "SELECT COUNT(*) FROM trees WHERE height > :minHeight";
        $stmt2 = $connection->prepare($sql2);
        $stmt2->execute(["minHeight" => $minHeight]);

    } catch (PDOException $e) {
        // Fehlerbehandlung bei der Datenbankverbindung oder der Abfrage
        echo "Fehler: " . $e->getMessage();
        exit;
    }

?>

<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Baumbestand
         Köln 2020</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

    th, td {
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
        <label for="height">Minimale Höhe in Metern:</label>
        <input id="height" name="height" value="<?= htmlspecialchars($minHeight) ?>" type="number" placeholder="Größe in m">
        <input type="submit">
    </form>

<?php if ($isSubmitted): ?>
<p><b><?= $stmt->fetchColumn() ?></b> Ergebnisse</p>
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
                <td><?= htmlspecialchars($row["germanName"]) ?></td>
                <td><?= htmlspecialchars($row["height"]) ?> m</td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php endif; ?>
</body>
</html>