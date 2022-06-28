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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
    <body>
    <?php include("includes/header.php") ?>
        <div class="main-section">
            <div class="content-container">
                <div class="slideShow" id="slideshow">
                    <div class="zoekbalk">
                        <div class="zoeken-titel">
                            <h1>Vakantie zoeken</h1>
                        </div>
                            <form class="zoek-form" action="php/indexvakantie.php" method="post">
                            <div class="container">
                                <label class="container" for="name"><p>Bestemming</p></label>
                                <input class="zoek-input" type="text" placeholder="Land..." name="name" required>
                                <label class="container" for="person"><p>Aantal personen</p></label>
                                <input class="zoek-input" min="0" type="number" placeholder="Aantal personen..." name="personen" required>
                                <label class="container" for="date"><p>Begindatum</p></label>
                                <input class="zoek-input" type="date" placeholder="" name="begindatum" required>
                                <label class="container" for="date"><p>Einddatum</p></label>
                                <input class="zoek-input" type="date" placeholder="" name="einddatum" required>
                                <input class="submit-button" value="Verzenden" type="submit" name="verzenden"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php include("includes/footer.php"); ?>
    </body>
<script src="js/home.js"></script>
<script src="https://kit.fontawesome.com/385f3b2853.js" crossorigin="anonymous"></script>
</html>