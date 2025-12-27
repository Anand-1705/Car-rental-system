<?php
$host = "db";                  // Docker MySQL service name
$user = "carrental_user";      // Must match docker-compose.yml
$password = "carrental_pass";  // Must match docker-compose.yml
$dbname = "carrental";

try {
    $dbh = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    exit("Database connection failed: " . $e->getMessage());
}
?>
