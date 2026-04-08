<?php
require "database.php";

    //the sql statement
    //words with ":" at the beginnings are placeholders to prevent sql injection
    $sql = "UPDATE eindopdrdata SET Voornaam = :voornaam, Achternaam = :achternaam, Email = :email, Geboortedatum = :geboortedatum WHERE ID = :id";

    //prepares the sql statement
    $update = $connection->prepare($sql);
    //replaces the placeholders with the actual inputs
    $update->execute([
        ":voornaam" => $_GET["voornaamInp"],
        ":achternaam" => $_GET["achternaamInp"],
        ":email" => $_GET["emailInp"],
        ":geboortedatum" => $_GET["geboortedatumInp"],
        ":id" => $_GET["ID"]
        ]);
// auto redirect to the index
header("Location: index.php");

exit;
?>