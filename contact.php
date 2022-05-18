<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include_once('includes/header.php'); ?>
    <div class="contact-page">
            <h2 class="contact-title">Contact</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, laborum error? Nulla!</p>

        <div class="accordion">
            <h2 class="veelgestelde-vragen">Veelgestelde vragen</h2>

        </div>

                <form class="contact-form" action="php/inloggen.php" method="post">
                <div class="inloggen"><p>Contact Opnemen</p></div>
                <label for="uname"><p>Naam</p></label>
                <input class="inloginput" type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><p>Achternaam</p></label>
                <input class="inloginput" type="password" placeholder="Enter Password" name="psw" required>
                <button class="submit" type="submit" name="inloggen">Inloggen</button>
            </form>
        </div>
    </div>

<?php include_once('includes/footer.php'); ?>
</body>
</html>