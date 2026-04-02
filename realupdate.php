<?php
require "database.php";

    $sql = "UPDATE eindopdrdata SET Voornaam = :voornaam, Achternaam = :achternaam, Email = :email, Geboortedatum = :geboortedatum WHERE ID = :id";

    $update = $connection->prepare($sql);

    $IDReal = $_GET["ID"];
    echo $IDReal;

    $update->execute([
        ":voornaam" => $_GET["voornaamInp"],
        ":achternaam" => $_GET["achternaamInp"],
        ":email" => $_GET["emailInp"],
        ":geboortedatum" => $_GET["geboortedatumInp"],
        ":id" => $_GET["IDInp"]
        ]);
    echo $_GET["IDInp"];
// auto redirect to the index
//header("Location: index.php");

//exit;
?>