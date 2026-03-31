<!DOCTYPE html>
<html lang="en">
<head>
    <!--Boostraps importing-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting</title>
</head>
<body>
    <form method="post" action="realinsert.php">
        <input type="text" name="voornaamInp" placeholder="Voornaam" required>
        <input type="text" name="achternaamInp" placeholder="Achternaam" required>
        <input type="email" name="emailInp" placeholder="Email" required>
        <input type="text" name="geboortedatumInp" placeholder="Datum [YYYY-MM-DD]" required>
        <button type="submit" name="insert">
            Insert
        </button>
    </form>
</body>
</html>