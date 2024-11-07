<?php

include('db_connect.php'); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $country_code = htmlspecialchars($_POST['country_code']);


    $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Korisničko ime ili email već postoji.";
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, lastname, email, username, password, country_code, created, modified) VALUES (?, ?, ?, ?, ?, ?, 1, 0)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $lastname, $email, $username, $hashed_password, $country_code);


        if (mysqli_stmt_execute($stmt)) {
            echo "Uspješno ste se registrirali!";
        } else {
            echo "Došlo je do greške pri registraciji. Pokušajte ponovo.";
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
