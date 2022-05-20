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
            <h2 class="contact-p">Contact</h2>
            <p class="contact-text">Heb je een vraag over jouw vakantie of wil je nog een reis boeken? Vind hieronder snel je antwoord op de meestgestelde vragen.</p>
            <div class="container">
                <h4 class="veelgestelde-vragen">Veelgestelde vragen</h4>
                <div class="veelgestelde-vragen-buttons">
                    <button class="subject-button">Corona</button>
                    <button class="subject-button">Reisadvies</button>
                    <button class="subject-button">Inchecken</button>
                    <button class="subject-button">Bagage</button>
                    <button class="subject-button">Reisbureaus</button>
                    <button class="subject-button">Visum</button>
                </div>
            </div>
            <p class="problemen-p">Staat uw probleem er niet bij, vul hem hieronder in</h3>
                <form class="contact-form" action="php/inloggen.php" method="post">
                    <div class="container">
                        <label for="name"><p>Name</p></label>
                        <input class="contact-input" type="text" placeholder="Name" name="name" required>
                        <label for="name"><p>Last name</p></label>
                        <input class="email-input" type="email" placeholder="Last name" name="email" required>
                        <label for="subject"><p>Subject</p></label>
                        <input class="subject-input" type="text" placeholder="Subject" name="subject" required>
                        <textarea class="textarea" name="textarea" id="textarea" cols="30" rows="50" placeholder="Add extra information" style="resize: none"></textarea>
                        <button class="submit" type="submit" name="verzenden">Verzenden</button>
                    </div>
                </form>
            </div>
        </div>
<?php include_once('includes/footer.php'); ?>
    </body>
</html>