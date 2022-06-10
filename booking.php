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
        <div class="booking">
            <div class="container">
                <div class="opties">
                    <h4 class="optie">Vakantietype</h4>
                    <select class="select">
                        <option class="optie">Wintersport</option>
                        <option class="optie">Zomervakantie</option>
                        <option class="optie">Verre reizen</option>
                        <option class="optie">Autovakantie</option>
                        <option class="optie">Stedentrips</option>
                        <option class="optie">Last-Minute</option>
                    </select>
                
                    <h4 class="optie">Reisduur</h4>
                        <input type="text" class="border"></input>

                    <h4 class="optie">Aantal sterren</h4>
                        <input type="checkbox" class="optie">1</input>
                        <input type="checkbox" class="optie">2</input>
                        <input type="checkbox" class="optie">3</input>
                        <input type="checkbox" class="optie">4</input>
                        <input type="checkbox" class="optie">5</input>

                    <h4 class="optie">Accomodatietype</h4>
                        <select>
                            <option class="optie">Hotel</option>
                            <option class="optie">Camping</option>
                            <option class="optie">Apartement</option>
                            <option class="optie">Resort</option>
                            <option class="optie">Aparthotel</option>
                        </select>
                    
                    <h4 class="optie">Budget</h4>
                        <input type="number" class="border"></input>
                </div>
                <div class="zoekopdracht">
                    <div class="vakanties"></div>
                </div>
                </div>
            </div>
<?php include_once('includes/footer.php'); ?>
    </body>
</html>