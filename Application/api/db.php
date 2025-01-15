<?php
$host = 'localhost';
$dbname = 'speedwash';
$username = 'root';
$password = 'gumikacsa'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Adatbázis kapcsolat hiba: " . $e->getMessage());
}
?>