<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak8</title>

</head>
<body>

	<h3>Odaberite vozilo:</h3>
    <form method="post">
     <?php
	$cars = array("Audi", "BMW", "Renault", "Citroen");
        // Radio gumbi za odabir automobila
        foreach ($cars as $car) {
            echo "<input type='radio' id='$car' name='vozilo' value='$car' required>";
            echo "<label for='$car'>$car</label><br>";
        }
        ?>
        <br>
        <input type="submit" value="Prikaži odabrano vozilo">
    </form>
	
	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Provjerava je li odabrano vozilo
        if (isset($_POST['vozilo'])) {
            $odabrano_vozilo = $_POST['vozilo'];
            echo "<h3>Odabrali ste vozilo: $odabrano_vozilo</h3>";
        }
    }
    ?>

</body>
    <!-- Domagoj Buljan zadatak8.php -->
</html>
