<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

$id = $_GET['ID'];

$sql = "DELETE FROM contact WHERE contactID = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

redirect("../userprofiles.php");