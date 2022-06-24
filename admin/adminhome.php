<?php

include("../includes/sessions.php");
include("../includes/connect.php");
include("../php/contactshow.php");
include("../php/vakantieshowtable.php");

global $conn;

$email = $_SESSION['email'];

$qeury = "SELECT * FROM users WHERE email = :email";
$stmt = $conn->prepare($qeury);
$stmt->bindParam(":email", $email);
$stmt->execute();
$row = $stmt->fetch();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin Profile | <?php print_r($row['naam']); ?></title>
</head>
<body>

    <section class="profile-plek">
        <div class="profile-content">
            <div class="profile-image-plek">
                <img class="profile-image" src=<?php print_r("../".$row['image']) ?> alt="">
            </div>
            <div class="profile-items-plek">
                <div class="profile-info-plek">
                    <div class="naam-plek">
                        <div class="label"><p>Naam,</p></div>
                        <div class="naam"><p><?php print_r($row['naam']) ?></p></div>
                        <div class="email"></div>
                    </div>
                </div>
                <div class="profile-info-plek">

                </div>
            </div>
        </div>
    </section>

    <section class="all-content-plek">
        <main class="main-content"> 
            <div class="buttons-nav">
                <button class="button-nav" id="vakantie">Vakantie</button>
                <button class="button-nav" id="geboekte">Geboekte</button>
                <button class="button-nav" id="reviews">Reviews</button>
                <button class="button-nav" id="contact">Contact</button> 
            </div>
            <hr>
            <div class="content">
                <div class="vakantie-content" id="vakantie-c">
                    <div class="vakantie-button-place">
                        <button class="button-vakantie" id="vakantie-knop">+ Create Vakantie</button>
                    </div>
                    <div class="table-container">
                        <table class="border-table">
                            <tr class="border-bottom-table">
                                <th>Reis-ID</th>
                                <th>Land</th>
                                <th>StartDatum</th>
                                <th>EindDatum</th>
                                <th>Kosten</th>
                                <th>Titel</th>
                                <th>personen</th>
                                <th>KleineBeschrijving</th>
                                <th>Beschrijving</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
    
                            <?php showVakantieTable(); ?>
                        </table>
                    </div>
                </div>
                <div class="geboekte-content" id="geboekte-c">

                </div>
                <div class="reviews-content" id="reviews-c">

                </div>
                <div class="contact-content" id="contact-c">
                    <div class="contact-info">
                        <?php showContact("SELECT * FROM contact ORDER BY contactID ASC", "../includes/connect.php"); ?>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section id="create-section" class="create-section">
        <div id="form-plek" class="create-form-plek">
            <div class="titel-plek">
                <h2>Create Vakantie</h2>
            </div>
            <form class="form-content" action="../php/createvakantie.php" method="POST" enctype="multipart/form-data">
                <div class="input-container">
                    <input class="input-style" placeholder="Land" type="text" name="land" required>
                </div>
                <div class="input-container">
                    <input class="input-style" type="date" name="startdatum" required>
                </div>
                <div class="input-container">
                    <input class="input-style" type="date" name="einddatum" required>
                </div>
                <div class="input-container">
                    <input class="input-style" placeholder="Prijs" type="number" name="kosten" required>
                </div>
                <div class="input-container">
                    <input class="input-style" type="text" placeholder="Titel" name="titel">
                </div>
                <div class="input-container">
                    <input class="input-style" type="text" name="kleinebeschrijving" placeholder="Kleine beschrijving" required>
                </div>
                <div class="input-container">
                    <input class="input-style" type="text" name="beschrijving" placeholder="Beschrijving" required>
                </div>
                <div class="input-container">
                    <input type="file" name="file" required>
                </div>
                <div class="input-container">
                    <input class="input-style" type="submit" name="submit"> 
                </div>
            </form>
        </div>
    </section>

    <?php include("adminfooter.php"); ?>

</body>
<script src="../js/adminhome.js"></script>
</html>
