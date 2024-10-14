<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Izračun">
    <meta name="keywords" content="Izračun">
    <title>Zadatak4</title>
</head>
<body>
    <h2>Unesite vrijednosti za a i b</h2>
    <form method="post">
        <label for="a">Vrijednost a:</label>
        <input type="number" step="any" id="a" name="a" required><br><br>

        <label for="b">Vrijednost b:</label>
        <input type="number" step="any" id="b" name="b" required><br><br>

        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvati vrijednosti iz forme
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Izračun varijable c
        $c = (3 * $a - $b) / 2;

        // Prikaz rezultata
        echo "<h3>Rezultat:</h3>";
        echo "Vrijednost c je: " . $c;
    }
    ?>
</body>
    <!-- Domagoj Buljan zadatak4.php -->
</html>
