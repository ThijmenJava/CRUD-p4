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
    <title>Over ons</title>
</head>
    <body class="over-ons-body">
        <?php include_once('includes/header.php'); ?>
            <div class="over-ons">
                <div class="informatie">
                    <div class="container">
                        <h2 class="informatie-titel">Over</h2><h2 class="blue-titel">Time To Travel</h2>
                    </div>
                    <div class="container">
                        <a href="#naar-info"><button class="naar-info">Naar informatie</button></a>
                    </div>
                </div>
                <div class="informatie-over-ons">
                    <a id="naar-info" href="naar-info"></a>
                    <h2 class="titel-werknemers">Werknemers</h2>
                        <div class="container">
                            <div class="naam">
                                <h3 class="naam-titel">Thijmen Lemmens</h3>
                                <p class="naam-p">Ik ben Thijmen Lemmens ik zit op Roc Nijmegen leerjaar 1. Ik heb de back-end van deze website gemaakt.</p>
                            </div>
                            <div class="naam">
                                <h3 class="naam-titel">Thijs Heerze</h3>
                                <p class="naam-p">Ik ben Thijs Heerze, ik zit op het Roc Nijmegen leerjaar 1. Ik heb de front-end van de website gemaakt.</p>
                            </div>
                        </div>
                            <div class="container-contact">
                                <div class="neem-contact-op">
                                    <h3 class="contact-titel">Wil je contact met ons opnemen?</h3>
                                    <p>Neem contact met ons op hieronder</p>
                                    <button class="contact-button">Contact</button>
                                </div>
                        </div>
                    </div>
            </div>
        <?php include_once('includes/footer.php'); ?>
    </body>
</html>