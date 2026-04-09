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
            Add a new person to your database!!
        </h1>
        <form method="post" action="realinsert.php" class="formAlign">
            <label>Voornaam</label>
            <input type="text" name="voornaamInp" required>
            <label>Achternaam</label>
            <input type="text" name="achternaamInp" required>
            <label>Email</label>
            <input type="email" name="emailInp" required>
            <label>Geboortedatum [YYYY/MM/DD]</label>
            <input type="text" name="geboortedatumInp" required>
            <label>Confirm?</label>
            <input type="checkbox" required>
            <button type="submit" name="insert" id="buttonAlign">
                Insert
            </button>
        </form>
        <a href=index.php class="mainButtons">
            Cancel
        </a>
    </div>
</body>
</html>