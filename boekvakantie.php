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
    <title>Vakantie boeken | <?php print_r($row['land']); ?> </title>
</head>
<body>
    <?php print_r($row['reisID']); ?>
</body>
</html>