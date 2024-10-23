<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak10</title>

</head>
<body>

<div class="container">
    <h2>Prebrojavanje riječi u rečenici</h2>
    <form method="post">
        <label for="recenica">Unesite rečenicu:</label><br>
        <textarea id="recenica" name="recenica" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Prebroj riječi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $recenica = $_POST['recenica'];


        $broj_rijeci = str_word_count($recenica);

        echo "<h3>Broj riječi u rečenici je: $broj_rijeci</h3>";
    }
    ?>
</div>

</body>
    <!-- Domagoj Buljan zadatak10.php -->
</html>
