<?php
// PHP blok za postavljanje varijabli
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/wiki/Da_Vincijev_kod";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler, knjiga">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
    <a href="$link" target="_blank">Više o knjizi na Wikipediji</a>

    <!-- Domagoj Buljan: da_vincijev_kod.php -->
</body>
</html>
