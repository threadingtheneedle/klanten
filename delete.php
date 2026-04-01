<?php
require "database.php";

if (isset($_GET["ID"])){
    $query = "DELETE FROM eindopdrdata WHERE ID = ".$_GET["ID"];
    $connection->exec(statement: $query);
}
// if whatever above this failed than it shows this
else{
    echo "you FAILED.....";
}
// Auto redirects to the home page
header("Location: index.php");

exit;
?>