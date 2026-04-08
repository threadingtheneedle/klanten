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
            Are you sure you want to delete this ID?
        </h1>
        <form method="get" action="realdelete.php" class="formAlign">
            <input type="int" name="ID" value="<?php echo $_GET["ID"]?>" readonly>
            <label>You can't undo this change!</label>
            <input type="checkbox" required>
            <button type="get" id="buttonAlign">
                Delete
            </button>
        </form>
        <a href=index.php class="mainButtons">
            Cancel
        </a>
    </div>
</body>
</html>