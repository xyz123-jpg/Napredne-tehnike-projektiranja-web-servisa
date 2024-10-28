<?php
// Uključivanje konekcije na bazu
include 'db_connect.php';

// Provjerava da li su podaci poslani
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $country_id = intval($_POST['country_id']);

    // SQL upit za ažuriranje korisničkih podataka
    $query = "UPDATE users SET name = '$name', lastname = '$lastname', country_id = $country_id WHERE id = $user_id";
    
    if (mysqli_query($conn, $query)) {
        echo "<p>Korisnik je uspješno ažuriran!</p>";
    } else {
        echo "Greška: " . mysqli_error($conn);
    }
} else {
    echo "Nisu svi podaci poslani.";
}

// Zatvaranje konekcije
mysqli_close($conn);
?>
