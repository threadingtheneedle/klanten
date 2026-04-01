<!DOCTYPE html>
<html lang="en">
<head>
    <!--Boostraps importing-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <title>Inserting</title>
</head>
<body>
    <div class="alignCenterButton">
        <h1>
            Update your data!!
        </h1>
        <form method="get" action="realupdate.php" class="formAlign">
            <input type="text" name="voornaamInp" placeholder="Voornaam">
            <input type="text" name="achternaamInp" placeholder="Achternaam">
            <input type="email" name="emailInp" placeholder="Email">
            <input type="text" name="geboortedatumInp" placeholder="Datum [YYYY-MM-DD]">
            <button type="submit" name="Update">
                Insert
            </button>
        </form>
        <a href=index.php class="mainButtons">
            Cancel
        </a>
    </div>
</body>
</html>