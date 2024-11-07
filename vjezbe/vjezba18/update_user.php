<?php

include 'db_connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $country_id = intval($_POST['country_id']);

    $query = "UPDATE users SET name = '$name', lastname = '$lastname', country_id = $country_id WHERE id = $user_id";
    
    if (mysqli_query($conn, $query)) {
        echo "<p>Korisnik je uspješno ažuriran!</p>";
    } else {
        echo "Greška: " . mysqli_error($conn);
    }
} else {
    echo "Nisu svi podaci poslani.";
}

mysqli_close($conn);
?>
