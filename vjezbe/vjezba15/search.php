<?php
// Uključivanje konekcije na bazu (pretpostavljamo da je u datoteci 'db_connect.php')
include 'db_connect.php';

// Provjeravamo je li obrazac poslan
if (isset($_POST['search_term'])) {
    // Sprema unos iz forme i koristi mysqli_real_escape_string za zaštitu od SQL injection napada
    $search_term = mysqli_real_escape_string($conn, $_POST['search_term']);
    
    // SQL upit za pretragu po imenu ili prezimenu
    $query = "SELECT * FROM users WHERE name LIKE '%$search_term%' OR lastname LIKE '%$search_term%'";
    
    // Izvršavanje upita
    $result = mysqli_query($conn, $query);
    
    // Provjeravamo jesu li pronađeni rezultati
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Lastname</th><th>Username</th><th>Country Code</th></tr>";
        
        // Ispis svakog rezultata u tablicu
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['country_code'] . "</td>";
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
