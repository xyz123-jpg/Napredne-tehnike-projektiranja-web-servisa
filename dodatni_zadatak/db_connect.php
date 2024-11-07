<?php
$servername = "localhost";
$username = "root"; // Zadano korisničko ime u XAMPP-u
$password = ""; // Zadana lozinka je prazna (bez lozinke)
$database = "ntpwp"; // Zamijenite 'your_database_name' s nazivom vaše baze

// Kreiranje konekcije
$conn = mysqli_connect($servername, $username, $password, $database);

// Provjera konekcije
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
