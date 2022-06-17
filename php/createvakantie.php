<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if(isset($_POST["submit"])) {
    $land = $_POST['land'];
    $startdatum = $_POST['startdatum'];
    $einddatum = $_POST['einddatum'];
    $prijs = $_POST['kosten'];
    $titel = $_POST['titel'];
    $kleinebeschrijving = $_POST['kleinebeschrijving'];
    $beschrijving = $_POST['beschrijving'];
    $image = $_FILES['file'];
    move_uploaded_file($image['tmp_name'], "../img/profileimg/".$image['name']);

    $query = "INSERT INTO reizen(land, startdatum, einddatum, kosten, titel, kleinebeschrijving, beschrijving, image) 
    VALUES (:land, :startdatum, :einddatum, :kosten, :titel, :kleinebeschrijving, :beschrijving, '../img/profileimg/{$image['name']}')";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":land", $land);
    $stmt->bindParam(":startdatum", $startdatum);
    $stmt->bindParam(":einddatum", $einddatum);
    $stmt->bindParam(":kosten", $prijs);
    $stmt->bindParam(":titel", $titel);
    $stmt->bindParam(":kleinebeschrijving", $kleinebeschrijving);
    $stmt->bindParam(":beschrijving", $beschrijving);
    $stmt->execute();

    redirect("../admin/adminhome.php");
}