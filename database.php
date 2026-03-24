<?php
// Host domain
$host = "localhost";
// The database's name
$dbname = "eindopdracht";
// Username used to login into the database
$username = "root";
// Password
$password = "";

// Bruh idk
try {
    $connection = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Sends you this message if the connection fails
    die("Databaseverbinding mislukt: " . $e->getMessage());
}
?>