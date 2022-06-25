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
    <title>Info | <?php print_r($row['land']); ?></title>
</head>
<body>
    
    <?php include("includes/header.php") ?>

    <section class="vakantieinfo-section">
        <div class="blok1">
            <div class="land-naam">
                <div class="titel-blok"> <h3> <?php print_r($row['titel']); ?> </h3> </div>
                <div class="land-blok"> <h5 class="land-titel"> <?php print_r($row['land']); ?> </h5> </div>
            </div>
            <div class="img-plek">
                <img class="img" src=<?php print_r($row['image']); ?> alt="">
            </div>
        </div>
        <div class="blok2">
            <div class="blok-info">

            </div>
            <div class="blok-boeken">
                <div class="boek-plek">
                    <div class="boek-blok">
                        <div class="kosten-plek">
                            <h4 class="kosten-titel">Kosten, <?php print_r($row['kosten']); ?>,- </h4>
                        </div>
                        <div class="text-plek">
                            <h3 class="text-font">Deze prijzen gelden om deze omstandig heden</h3>
                        </div>
                        <div class="datum-plek">
                            <div class="single-plek">
                                <i class="fa-solid fa-calendar-days calander"></i>
                                <h5 class="datum"> <?php print_r($row['startdatum']); ?> </h5>
                            </div>
                            <div class="single-plek">
                                <i class="fa-solid fa-calendar-days calander"></i>
                                <h5 class="datum"> <?php print_r($row['einddatum']); ?> </h5>
                            </div>
                        </div>
                        <div class="extra-info">
                            <div class="single-plek">
                                <h5 class="info-titel">Personen <?php print_r($row['personen']); ?></h5>
                            </div>
                            <div class="single-plek">
                                <h5 class="info-titel"><?php print_r($row['land']) ?></h5>
                            </div>
                        </div>
                        <div class="button-plek">
                            <a href=<?php print_r("boekvakantie.php?ID=".$row['reisID']) ?>><button class="button">Boeken</button></a>
                        </div>
                    </div>
                </div>
                <div class="review-plek">

                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php") ?>

</body>
<script src="https://kit.fontawesome.com/385f3b2853.js" crossorigin="anonymous"></script>
</html>