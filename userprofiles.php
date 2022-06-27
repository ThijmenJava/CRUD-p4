<?php
include("includes/sessions.php");
include("includes/connect.php");
include("php/contactshow.php");
include("php/showvakantieuser.php");
include("php/reviewshowuser.php");

global $conn;

$email = $_SESSION['email'];

$qeury = "SELECT * FROM users WHERE email = :email";
$stmt = $conn->prepare($qeury);
$stmt->bindParam(":email", $email);
$stmt->execute();
$row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile | <?php print_r($row['naam']); ?></title>
</head>
<body>

    <section class="profile-plek">
        <div class="profile-content">
            <div class="profile-image-plek">
                <img class="profile-image" src=<?php print_r($row['image']) ?> alt="">
            </div>
            <div class="profile-items-plek">

            </div>
        </div>
    </section>

    <section class="all-content-plek">
        <main class="main-content"> 
            <div class="buttons-nav">
                <button class="button-nav" id="vakantie">Vakantie</button>
                <button class="button-nav" id="reviews">Reviews</button>
                <button class="button-nav" id="contact">Contact</button> 
            </div>
            <hr>
            <div class="content">
                <div class="vakantie-content" id="vakantie-c">
                    <?php showVakantie("SELECT * FROM bookingen WHERE userID = '".$row['accountID']."'"); ?>
                </div>
                <div class="reviews-content" id="reviews-c">
                    <div class="reviews-button-place">
                        <button id="button-review-create" class="button-review">+ Create Review</button>
                    </div>
                    <div class="content-review">
                        <?php showReview("SELECT * FROM recensie WHERE userID = '".$row['accountID']."'"); ?>
                    </div>
                </div>
                <div class="contact-content" id="contact-c">
                    <div class="contact-info">
                        <?php showContact("SELECT * FROM contact WHERE email = '$email' ORDER BY contactID ASC", "includes/connect.php", 1); ?>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section id="review-section" class="review-add-plek">
        <div class="review-div" id="review-div">
            <div class="review-titel">
                <h2 class="titel">Maak review</h2>
            </div>
            <form action=<?php print_r("php/createreview.php?ID=".$row['accountID']); ?> method="POST" class="form">
                <div class="input-plek">
                    <input class="input" placeholder="Reis Titel" type="text" name="land-titel" required>
                </div>
                <div class="input-plek">
                    <input class="input" placeholder="Review Titel" type="text" name="review-titel" required>
                </div>
                <div class="input-plek">
                    <input class="input" placeholder="Beschrijving" type="text" name="Beschrijving" required>
                </div>
                <div class="input-plek">
                    <input class="input" placeholder="Sterren" type="number" name="Sterren" required>
                </div>
                <div class="input-plek">
                    <input class="button" value="Verzenden" type="submit" name="submit">
                </div>
                <input value=<?php print_r($row['accountID']); ?> name="hidden" type="hidden">
            </form>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>

</body>
<script src="js/userprofiles.js"></script>
<script src="https://kit.fontawesome.com/385f3b2853.js" crossorigin="anonymous"></script>
</html>