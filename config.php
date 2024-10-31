<?php
$dsn = 'mysql:host=localhost;port=3307;dbname=crud_app;charset=utf8mb4';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully with utf8mb4 character set.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
