<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <h2>Forma za Registraciju</h2>
    <form action="signup.php" method="POST">
        <label for="name">Ime:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="lastname">Prezime:</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="username">Korisničko ime:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Lozinka:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="country_code">Država:</label>
        <select id="country_code" name="country_code" required>
            <option value="">--Odaberite državu--</option>
            <option value="HR">Hrvatska</option>
            <option value="US">Sjedinjene Američke Države</option>
            <option value="UK">Ujedinjeno Kraljevstvo</option>
            <option value="DE">Njemačka</option>
            <option value="FR">Francuska</option>
            <!-- Dodajte više opcija prema potrebi -->
        </select><br>

        <input type="submit" value="Registriraj se">
    </form>
</body>
</html>


<!-- Domagoj Buljan zadatak16-->