<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$var = 0;

$sql = "UPDATE recensie SET validatie = :validatie WHERE recensieID = :recensieID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":validatie", $var);
$stmt->bindParam(":recensieID", $_GET['ID']);
$stmt->execute();

redirect("../admin/adminhome.php");