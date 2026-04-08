<?php
    require "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Boostraps importing-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/Prophet.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yo!!</title>
</head>
<body>
    <header>
        <h1 class='alignCenter'>
            Database!!
        </h1>
    </header>
    <main id='alignButtons'>
        <h2>
            <a href='add.php' class='mainButtons'>Add</a>
        </h2>
    </main>
    <footer>
        <?php
            $sql = "SELECT * FROM eindopdrdata";

            $result = $connection->query($sql);

            echo "
                    <table class='alignCenter' id='margin'>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Email</th>
                        <th>Geboortedatum [YYYY-MM-DD]</th>
                        <th class='invisHeader'>Actions</th>
                        <th class='invisHeader'> </th>
                ";

            foreach ($result as $client) {
                echo "<tr><td>" . $client["ID"] . "</td><td>" . $client["Voornaam"] . "</td><td>" . $client["Achternaam"] . "</td><td>" . $client["Email"] . "</td><td>" . $client["Geboortedatum"] . "</td><td>" . "<a href='delete.php?ID=".$client["ID"]."'>Delete</a>"
                . "</td><td>" . "<a href='update.php?ID=".$client["ID"]."'>Update</a>" . "</td></tr>";
            }
            echo "</table>";
        ?>
    </footer>
</body>
</html>