<?php
$host = 'localhost';      // or 127.0.0.1
$db   = 'rainforest'; // your database name
$user = 'root';           // default user in XAMPP
$pass = '';               // default password is empty in XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set error mode to show exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Optional
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
