<?php

include("../includes/sessions.php");
include("../includes/connect.php");
include("../php/contactshow.php");

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

            </div>
        </div>
    </section>

<<<<<<< HEAD
=======
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
                 
                </div>
                <div class="geboekte-content" id="geboekte-c">

                </div>
                <div class="reviews-content" id="reviews-c">

                </div>
                <div class="contact-content" id="contact-c">
                    <div class="contact-info">
                        <?php showContact("SELECT * FROM contact ORDER BY contactID ASC"); ?>
                    </div>
                </div>
            </div>
        </main>
    </section>

>>>>>>> 70d99da86bf15642817b934d642e9c3d85f4b1bf
    <?php include("adminfooter.php"); ?>

</body>
<script src="../js/adminhome.js"></script>
</html>
