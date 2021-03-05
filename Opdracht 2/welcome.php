<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML Formulier Verwerken</title>
</head>
<body>
    <div id="content">
        <h1>De ingevulde gegevens zijn:</h1>
        <p>
            Naam: <?php echo $_POST["name"]; ?>
            <br>
            Email: <?php echo $_POST["email"]; ?>
        </p>
    </div>
    
</body>
</html>