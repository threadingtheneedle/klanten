<?php
require "database.php";

//what the fuck is this bruh
if (isset($_GET["ID"])){
    echo $_GET["ID"] . " is the selected id...";
    $QUERY = "DELETE FROM eindopdrdata WHERE ID = ".$_GET["ID"];
    $connection->exec(statement: $query);
}
// if whatever above this failed than it shows this
else{
    echo "you FAILED.....";
}
?>