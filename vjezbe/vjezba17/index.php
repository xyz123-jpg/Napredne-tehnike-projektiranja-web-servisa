<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 17</title>
	<style>
 
        body, h1, form {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }


        body {
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            text-align: center;
        }

   
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Fixed width for form */
        }


        label {
            margin-bottom: 10px;
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%; 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px; 
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #5c67f2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #4b54d3; 
        }
    </style>
</style>
</head>
<body>
    <h1>Pretraži korisnike</h1>
    <form action="search.php" method="POST">
        <label for="search_term">Pretraži korisnike po imenu ili prezimenu</label>
        <input type="text" name="search_term" id="search_term" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
<!-- Domagoj Buljan zadatak17-->
