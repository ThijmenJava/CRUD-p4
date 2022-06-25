<?php 

include("../includes/connect.php");
include("../includes/util.php");

$id = $_POST['id'];
$land = $_POST['land'];
$startdatum = $_POST['startdatum'];
$einddatum = $_POST['einddatum'];
$prijs = $_POST['prijs'];
$titel = $_POST['titel'];
$personen = $_POST['personen'];
$kleinebeschrijving = $_POST['kleinebeschrijving'];
$beschrijving = $_POST['beschrijving'];
$image = $_POST['image'];

$sql = "UPDATE reizen SET land = :land, startdatum = :startdatum, einddatum = :einddatum, kosten = :prijs,
 titel = :titel, personen = :personen, kleinebeschrijving = :kleinebeschrijving, beschrijving = :beschrijving, image = :image WHERE reisID = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":land", $land);
$stmt->bindParam(":startdatum", $startdatum);
$stmt->bindParam(":einddatum", $einddatum);
$stmt->bindParam(":prijs", $prijs);
$stmt->bindParam(":titel", $titel);
$stmt->bindParam(":personen", $personen);
$stmt->bindParam(":kleinebeschrijving", $kleinebeschrijving);
$stmt->bindParam(":beschrijving", $beschrijving);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":id", $id);
$stmt->execute();

redirect("../admin/adminhome.php");

