<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak11</title>

</head>
<body>

<div class="container">
    <h2>Prosti brojevi</h2>
   <?php
// Funkcija za provjeru da li je broj prost
function jeProst($broj) {
    // Brojevi manji ili jednaki 1 nisu prosti
    if ($broj <= 1) {
        return false;
    }
    
    // Provjera djeljivosti
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false; // Nije prost
        }
    }
    
    return true; // Jest prost
}

// Ispis svih prostih brojeva manjih od 100
echo "Prosti brojevi manji od 100 su:<br>";
for ($j = 2; $j < 100; $j++) {
    if (jeProst($j)) {
        echo $j . " ";
    }
}
?>

</div>

</body>
    <!-- Domagoj Buljan zadatak11.php -->
</html>
