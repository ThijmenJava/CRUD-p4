<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$query = "DELETE FROM recensie WHERE recensieID = :recensieID";
$stmt = $conn->prepare($query);
$stmt->bindParam(':recensieID', $_GET['ID']);
$stmt->execute();

redirect("../userprofiles.php");