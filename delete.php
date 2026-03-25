<?php
require "database.php";

if (isset($_GET["ID"])){
    $query = "DELETE FROM eindopdrdata WHERE ID = ".$_GET["ID"];
    $connection->exec(statement: $query);
    echo "The id known as " . $_GET["ID"] . " has been DELETED......";
}
// if whatever above this failed than it shows this
else{
    echo "you FAILED.....";
}
?>