<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random">
    <meta name="keywords" content="Random">
    <title>Zadatak9</title>

</head>
<body>

	<?php

date_default_timezone_set('Europe/Zagreb');

$trenutni_dan = date('N');

$trenutni_sati = date('G');

$drzavni_praznici = array(
    '01-01', 
    '05-01',
    '08-15', 
    '12-25', 
    '12-26'  
);


$trenutni_datum = date('m-d');

if (in_array($trenutni_datum, $drzavni_praznici)) {
    echo "<h3>Dućan je zatvoren zbog državnog praznika!</h3>";
} else {

    if ($trenutni_dan == 7) {
        echo "<h3>Dućan je danas zatvoren (nedjelja).</h3>";
    }

    elseif ($trenutni_dan == 6) {
        if ($trenutni_sati >= 9 && $trenutni_sati < 14) {
            echo "<h3>Dućan je otvoren (subota)!</h3>";
        } else {
            echo "<h3>Dućan je zatvoren (subota)!</h3>";
        }
    }
 
    else {
        if ($trenutni_sati >= 8 && $trenutni_sati < 20) {
            echo "<h3>Dućan je otvoren (radni dan)!</h3>";
        } else {
            echo "<h3>Dućan je zatvoren (radni dan)!</h3>";
        }
    }
}
?>



</body>
    <!-- Domagoj Buljan zadatak9.php -->
</html>
