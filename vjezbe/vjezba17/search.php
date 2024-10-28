<?php
// Uključivanje konekcije na bazu (pretpostavljamo da je u datoteci 'db_connect.php')
include 'db_connect.php';

// Provjeravamo je li obrazac poslan
if (isset($_POST['search_term'])) {
    // Sprema unos iz forme i koristi mysqli_real_escape_string za zaštitu od SQL injection napada
    $search_term = mysqli_real_escape_string($conn, $_POST['search_term']);
    
    // SQL upit za pretragu po imenu ili prezimenu, uključujući join s tabelom countries
    $query = "
        SELECT users.*, countries.country_name 
        FROM users 
        LEFT JOIN countries ON users.country_id = countries.id 
        WHERE users.name LIKE '%$search_term%' OR users.lastname LIKE '%$search_term%'
    ";
    
    // Izvršavanje upita
    $result = mysqli_query($conn, $query);
    
    // Provjeravamo jesu li pronađeni rezultati
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
		 echo '<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 20px 0;
                    font-size: 16px;
                    text-align: left;
                }
                th, td {
                    padding: 12px;
                    border: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
                tr:hover {
                    background-color: #f1f1f1;
                }
                tr:nth-child(even) {
                    background-color: #f9f9f9;
                }
              </style>';


        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Lastname</th><th>Username</th><th>Country</th></tr>"; // Changed Country Code to Country
        
        // Ispis svakog rezultata u tablicu
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . ($row['country_name'] ? $row['country_name'] : 'N/A') . "</td>"; // Display country name or 'N/A'
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // Ako nema rezultata
        echo "<p>No results found for '$search_term'</p>";
    }
} else {
    echo "<p>No search term provided.</p>";
}
?>
