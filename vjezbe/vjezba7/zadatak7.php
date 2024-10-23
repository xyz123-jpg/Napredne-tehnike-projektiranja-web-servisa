<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak7</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
    <h2>Izračun prosjeka i ocjene</h2>
    <form method="post">
        <label for="kolokvij1">Ocjena I. kolokvija (1-5):</label>
        <input type="number" id="kolokvij1" name="kolokvij1" min="1" max="5" required><br><br>
        
        <label for="kolokvij2">Ocjena II. kolokvija (1-5):</label>
        <input type="number" id="kolokvij2" name="kolokvij2" min="1" max="5" required><br><br>
        
        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvati ocjene iz forme
        $kolokvij1 = $_POST['kolokvij1'];
        $kolokvij2 = $_POST['kolokvij2'];

        // Provjera je li ocjena unutar dozvoljenog raspona
        if (($kolokvij1 < 1 || $kolokvij1 > 5) || ($kolokvij2 < 1 || $kolokvij2 > 5)) {
            echo "<h3>Greška: Ocjene moraju biti u rasponu od 1 do 5.</h3>";
        } else {
            // Ako je jedan od kolokvija negativan (manji od 2), konačna ocjena je 1
            if ($kolokvij1 < 2 || $kolokvij2 < 2) {
                $konacna_ocjena = 1;
                echo "<h3>Krajnja ocjena: $konacna_ocjena (negativna ocjena)</h3>";
            } else {
                // Izračun prosjeka i konačne ocjene
                $prosjek = ($kolokvij1 + $kolokvij2) / 2;
                echo "<h3>Prosjek ocjena: $prosjek</h3>";

                // Zaokruživanje prosjeka na najbližu cijelu ocjenu
                $konacna_ocjena = round($prosjek);
                echo "<h3>Krajnja ocjena: $konacna_ocjena</h3>";
            }
        }
    }
    ?>
</div>

 
</body>
    <!-- Domagoj Buljan zadatak7.php -->
</html>
