<?php 

include("../includes/connect.php");
include("../includes/util.php");

$land = $_POST['land'];
$startdatum = $_POST['startdatum'];
$einddatum = $_POST['einddatum'];
$prijs = $_POST['prijs'];
$titel = $_POST['titel'];
$personen = $_POST['personen'];
$kleinebeschrijving = $_POST['kleinebeschrijving'];
$beschrijving = $_POST['beschrijving'];
$image = $_POST['image'];

$sql = "UPDATE";