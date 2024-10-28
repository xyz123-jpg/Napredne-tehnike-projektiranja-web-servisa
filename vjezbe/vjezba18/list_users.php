<?php
// Uključivanje konekcije na bazu
include 'db_connect.php';

// SQL upit za dobivanje svih korisnika
$query = "SELECT users.*, countries.country_name 
          FROM users 
          LEFT JOIN countries ON users.country_id = countries.id";
$result = mysqli_query($conn, $query);

// Provjeravamo jesu li pronađeni rezultati
if (mysqli_num_rows($result) > 0): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Korisnika</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                padding: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid #ccc;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #5c67f2;
                color: white;
            }
            a {
                color: #5c67f2;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <h1>Lista Korisnika</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Username</th>
                <th>Država</th>
                <th>Akcije</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['country_name'] ? $row['country_name'] : 'N/A'; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $row['id']; ?>">Uredi</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
    </html>
<?php
else:
    echo "<p>Nema korisnika u bazi podataka.</p>";
endif;

// Zatvaranje konekcije
mysqli_close($conn);
?>
