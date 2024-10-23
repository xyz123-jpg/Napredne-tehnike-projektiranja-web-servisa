<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak6</title>

</head>
<body>
    <h2>Kalkulator (switch naredba)</h2>
    <form method="post">
        <label for="broj1">Upišite prvi broj</label>
        <input type="number" id="broj1" name="broj1" required><br><br>
		<label for="broj2">Upišite drugi broj</label>
        <input type="number" id="broj2" name="broj2" required><br><br>
		
		Operacija:
    <select name="operacija"  id="operacija" required>
        <option value="zbrajanje">Zbrajanje (+)</option>
        <option value="oduzimanje">Oduzimanje (-)</option>
        <option value="mnozenje">Množenje (*)</option>
        <option value="dijeljenje">Dijeljenje (/)</option>
    </select><br><br>
		
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvati vrijednosti iz forme
		
		if (isset($_POST['broj1'], $_POST['broj2'], $_POST['operacija'])) {
        $broj1 = $_POST['broj1'];
		$broj2 = $_POST['broj2'];
		$operacija = $_POST ['operacija'];
		
		switch ($operacija) {
        case 'zbrajanje':
            $rezultat = $broj1 + $broj2;
            echo "<h3>Rezultat: $broj1 + $broj2 = $rezultat</h3>";
            break;
        case 'oduzimanje':
            $rezultat = $broj1 - $broj2;
            echo "<h3>Rezultat: $broj1 - $broj2 = $rezultat</h3>";
            break;
        case 'mnozenje':
            $rezultat = $broj1 * $broj2;
            echo "<h3>Rezultat: $broj1 * $broj2 = $rezultat</h3>";
            break;
        case 'dijeljenje':
            if ($broj2 == 0) {
                echo "<h3>Greška: Dijeljenje s nulom nije dozvoljeno!</h3>";
            } else {
                $rezultat = $broj1 / $broj2;
                echo "<h3>Rezultat: $broj1 / $broj2 = $rezultat</h3>";
            }
            break;
        default:
            echo "<h3>Nepoznata operacija!</h3>";
            break;
    }
    }
	}
    ?>
</body>
    <!-- Domagoj Buljan zadatak6.php -->
</html>
