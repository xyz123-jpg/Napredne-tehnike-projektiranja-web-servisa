<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("SELECT file_path FROM images WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    if (unlink($filePath)) {
        $stmt = $conn->prepare("DELETE FROM images WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
