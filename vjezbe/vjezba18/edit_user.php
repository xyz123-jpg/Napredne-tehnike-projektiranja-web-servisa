<?php
// Uključivanje konekcije na bazu
include 'db_connect.php';

// Provjerava da li je ID korisnika poslan
if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']); // Dobijamo ID korisnika iz URL-a

    // SQL upit za dobivanje korisničkih podataka
    $query = "SELECT users.*, countries.country_name FROM users 
              LEFT JOIN countries ON users.country_id = countries.id 
              WHERE users.id = $user_id";
    
    $result = mysqli_query($conn, $query);
    
    // Provjerava da li je korisnik pronađen
    if ($row = mysqli_fetch_assoc($result)) {
        // Spremamo korisničke podatke u varijable
        $name = $row['name'];
        $lastname = $row['lastname'];
        $country_id = $row['country_id'];
    } else {
        echo "Korisnik nije pronađen.";
        exit;
    }
} else {
    echo "ID korisnika nije dostupan.";
    exit;
}

// Dobijanje liste država za dropdown
$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($conn, $countries_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi Korisnika</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #5c67f2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #4b54d3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Uredi Korisnika</h2>
        <form action="update_user.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user_id; ?>">
            <label for="name">Ime:</label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>

            <label for="lastname">Prezime:</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required>

            <label for="country">Država:</label>
            <select name="country_id" id="country" required>
                <?php while ($country = mysqli_fetch_assoc($countries_result)): ?>
                    <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == $country_id) ? 'selected' : ''; ?>>
                        <?php echo $country['country_name']; ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <input type="submit" value="Ažuriraj">
        </form>
    </div>
</body>
</html>
