<?php
require "database.php";

if (isset($_GET["ID"])){
    //Sets up the sql query
    $query = "DELETE FROM eindopdrdata WHERE ID = ".$_GET["ID"];
    //Decreases the ID count
    $idCheck = "ALTER TABLE eindopdrdata AUTO_INCREMENT = ".$_GET["ID"];
    //Executes the 1st query
    $connection->exec(statement: $query);
    //Executes the 2nd query
    $connection->exec(statement: $idCheck);
}
// if whatever above this failed than it shows this
else{
    echo "you FAILED.....";
}
// Auto redirects to the home page
header("Location: index.php");

exit;
?>