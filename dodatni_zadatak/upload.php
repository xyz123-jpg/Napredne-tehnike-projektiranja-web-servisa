<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = "uploads/";
    
    $originalFilename = pathinfo($_FILES["image"]["name"], PATHINFO_FILENAME);
    $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    
    //dodajem vrijeme
    $uniqueFilename = $originalFilename . '_' . time() . '.' . $fileExtension;
    $targetFile = $targetDir . $uniqueFilename;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {

        $stmt = $conn->prepare("INSERT INTO images (file_path) VALUES (?)");
        $stmt->bind_param("s", $targetFile);
        $stmt->execute();
        header("Location: index.php");
    } else {
        echo "Greška u uploadanju slike.";
    }
}
?>
