<?php
require "database.php";

    $sql = "INSERT INTO `eindopdrdata` (`voornaam`, `achternaam`, `email`, `geboortedatum`)
            VALUES (:voornaam, :achternaam, :email, :geboortedatum)";

    $insert = $connection->prepare($sql);

    $insert->execute([
        ":voornaam" => $_POST[voornaamPost],
        ":achternaam" => $achternaamPost,
        ":email" => $emailPost,
        ":geboortedatum" => $geboortedatumPost
    ])
?>