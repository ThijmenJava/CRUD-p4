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
    <title>Contact</title>
</head>
    <body>
<?php include_once('includes/header.php'); ?>
        <div class="contact-opnemen">
                <div class="container">
                    <h1 class="contact-title">Contact</h1>
                    <p class="contact-p">Waar kunnen wij je mee helpen?</p>
                    <div class="container">
                        <a href="#formulier"><button class="naar-formulier">Naar formulier</button></a>
                    </div>
                </div>
            </div>
        <div id="formulier" class="formulier-container">
            <div class="contact-page">
                <h1 class="contact-title">Formulier</h1>
                <p class="contact-text">Heb je een vraag over jouw vakantie of wil je nog een reis boeken? Vul dit formulier in en stel hieronder jouw vraag.</p>
                    <form class="contact-form" action="php/contactbackend.php" method="POST">
                        <div class="container">
                            <label for="name"><p>Volledige naam</p></label>
                            <input class="contact-input" type="text" placeholder="Voornaam..." name="name" required>
                            <label for="name"><p>E-mail</p></label>
                            <input class="contact-input" type="email" placeholder="Achternaam..." name="email" required>
                            <label for="subject"><p>Onderwerp</p></label>
                            <input class="contact-input" type="text" placeholder="Onderwerp..." name="subject" required>
                            <label for="subject"><p>Beschrijving</p></label>
                            <textarea class="textarea" name="textarea" id="textarea" cols="30" rows="50" placeholder="Beschrijving..." style="resize: none" required></textarea>
                            <input class="submit-button" type="submit" name="submit" value="Verzenden">
                            <!-- <button class="submit-button" type="submit" name="submit">Verzenden</button> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-opnemen">
                <div class="container">
                    <h1 class="contact-opnemen-title">Contact opnemen</h1>
                    <p class="contact-opnemen-p">Wil je contact met ons opnemen? Je kunt ons bereiken via de onderstaande middelen.</p>
                    <div class="container-orange">
                        <div class="contact opnemen-1">
                            <a class="orange" href="afspraak_maken">Afpraak maken</a>
                            <p>Maak online een afspraak in het reisbureau.</p>
                        </div>
                        <div class="contact opnemen-2">
                            <a class="orange" href="">Bel ons - 088 - 555 4999</a>
                            <p>Maandag t/m zaterdag bereikbaar.</p>
                        </div>
                        <div class="contact opnemen-3">
                            <a class="orange" href="#formulier">Mail ons</a>
                            <p>Je kunt 24 uur per dag je vragen stellen.</p>
                        </div>
                        <div class="contact opnemen-4">
                            <a class="orange" href="zoek_uw_reisbureau">Zoek uw reisbureau</a>
                            <p>Met de reisbureaus zijn wij altijd in de buurt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include_once('includes/footer.php'); ?>
    </body>
</html>