<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak5</title>
	<style>
		.succes{
			color: green;
			
		}
		.failure{
			color:red;
		}
	</style>
</head>
<body>
    <h2>Unesite vrijednosti za a i b</h2>
    <form method="post">
        <label for="a">Upišite jedan broj od 1 do 10:</label>
        <input type="number" step="any" id="a" name="a" required><br><br>

        <input type="submit" value="Pošalji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dohvati vrijednosti iz forme
        $a = $_POST['a'];
		$b = rand(1,10);

        if($a == $b){
			echo "<h3 class='succes'>Bravoooo!</h3>";
		}
		else{
			echo "<h3 class='failure'>Niste pogodili broj :(</h3>";
		}

        // Prikaz rezultata
        echo "Broj je bio: " . $b;
  
    }
    ?>
</body>
    <!-- Domagoj Buljan zadatak5.php -->
</html>
