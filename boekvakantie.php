<?php

include("includes/connect.php");
include("includes/util.php");

global $conn;

if(empty($_GET['ID'])) {
    redirect("booking.php");
}

$query = "SELECT * FROM reizen WHERE reisID = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(":id", $_GET['ID']);
$stmt->execute();
$row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Vakantie boeken | <?php print_r($row['land']); ?> </title>
</head>
<body>

    <?php include("includes/header.php"); ?>

    <section class="section-boek">
        <div class="big-info">
            <div class="center-info">
                <form action=<?php print_r("php/boeken.php?ID=".$_GET['ID']); ?> method="POST">
                    <div class="titel-plek"><h4 class="titel">Boeken</h4></div>
                    <div class="input-titel-plek"><h5 class="titel-font">E-mailadres</h5></div>
                    <div class="input-plek"><input class="input" type="text" name="email" required></div>
                    <div class="input-titel-plek"><h5 class="titel-font">Naam</h5></div>
                    <div class="input-plek"><input class="input" type="text" name="naam" required></div>
                    <div class="input-titel-plek"><h5 class="titel-font">Wachtwoord</h5></div>
                    <div class="input-plek"><input class="input" type="password" name="wachtwoord" required></div>
                    <div class="input-titel-plek"><h5 class="titel-font">Boek</h5></div>
                    <div class="input-plek"><input value="Verzenden" class="submit-button" type="submit" name="submit"></div>
                </form>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>

</body>
</html>