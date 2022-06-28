<?php
include("php/vakantiebackendshow.php");
?>
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
    <title>Booking</title>
</head>
    <body>
        <?php include_once('includes/header.php'); ?>

        <section class="booking-section">
            <div class="content-booking">
                <div class="form-plek">
                    <form method="POST" class="form-block">
                        <div class="input-plek">
                            <div class="label-plek">
                                <h5 class="font-label">Bestemming</h5>
                            </div>
                            <div class="input">
                                <input class="input-veld" type="text" name="land" placeholder="Bestemming">
                            </div>
                        </div>
                        <div class="input-plek">
                            <div class="label-plek">
                                <h5 class="font-label">Personen</h5>
                            </div>
                            <div class="input">
                                <input class="input-veld" type="number" name="personen" placeholder="Personen">
                            </div>
                        </div>
                        <div class="input-plek">
                            <div class="label-plek">
                                <h5 class="font-label">Startdatum</h5>
                            </div>
                            <div class="input">
                                <input class="input-veld" type="date" name="datum" placeholder="Startdatum">
                            </div>
                        </div>
                        <div class="input-plek">
                            <div class="label-plek">
                                <h5 class="font-label">Einddatum</h5>
                            </div>
                            <div class="input">
                                <input class="input-veld" type="date" name="datum2" placeholder="Einddatum">
                            </div>
                        </div>
                        <div class="input-plek">
                            <input class="booking-input" type="submit" name="submit" value="Zoek">
                        </div>
                    </form>
                </div>
                <div class="booking-plek">
                    <?php showVakantie(); ?>
                </div>
            </div>
        </section>

        <?php include_once('includes/footer.php'); ?>
    </body>
</html>