<?php

include('../includes/connect.php');
include('../includes/util.php');

global $conn;

$query = "DELETE FROM bookingen WHERE boekingID = :boekingID";
$stmt = $conn->prepare($query);
$stmt->bindParam(':boekingID', $_GET['ID']);
$stmt->execute();

redirect("../admin/adminhome.php");