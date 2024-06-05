<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_wisata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `order` WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: transaksi.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID parameter is missing.";
}

$conn->close();
