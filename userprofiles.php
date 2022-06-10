<?php
include("includes/sessions.php");
include("includes/connect.php");

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
                <button class="button-nav">Vakantie</button>
                <button class="button-nav">Reviews</button>
                <button class="button-nav">Contact</button> 
            </div>
            <hr>
        </main>
    </section>

    <?php include("includes/footer.php"); ?>

</body>
</html>