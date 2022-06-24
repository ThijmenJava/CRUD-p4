<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$query = "DELETE FROM reizen WHERE reisID = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_GET['ID']);
$stmt->execute();

redirect("../admin/adminhome.php");

?>