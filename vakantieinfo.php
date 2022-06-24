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
    <title><?php print_r($row['land']) ?></title>
</head>
<body>
    
    <?php include("includes/header.php") ?>

    <section>
        <?php echo $_GET['ID']; ?>
    </section>

    <?php include("includes/footer.php") ?>

</body>
</html>