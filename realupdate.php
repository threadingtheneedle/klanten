<?php
require "database.php";

    $sql = "UPDATE `eindopdrdata` (`voornaam`, `achternaam`, `email`, `geboortedatum`)
            VALUES (:voornaam, :achternaam, :email, :geboortedatum)";

    $insert = $connection->prepare($sql);

    $insert->execute([
        ":voornaam" => $_POST["voornaamInp"],
        ":achternaam" => $_POST["achternaamInp"],
        ":email" => $_POST["emailInp"],
        ":geboortedatum" => $_POST["geboortedatumInp"],
        ]);
// auto redirect to the index
header("Location: index.php");

exit;
?>