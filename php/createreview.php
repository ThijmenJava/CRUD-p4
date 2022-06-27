<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

print_r($_POST['hidden']);  

if(isset($_POST['submit'])) {
    $sql = "SELECT * FROM reizen WHERE titel = :titel";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":titel", $_POST['land-titel']);
    $stmt->execute();
    $row = $stmt->fetch();

    $sql = "SELECT * FROM bookingen WHERE reisID = :reisID AND userID = :userID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":reisID", $row['reisID']);
    $stmt->bindParam(":userID", $_POST['hidden']);
    $stmt->execute();

    print_r($row['reisID']);

    print_r($stmt->rowCount());

    if($stmt->rowCount() == 1) {
        $sql = "INSERT INTO recensie(userID, reisID, validatie, titel, beschrijving, sterren) VALUES (:userID, :reisID, 1, :titel, :beschrijving, :sterren)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":userID", $_POST['hidden']);
        $stmt->bindParam(":reisID", $row['reisID']);
        $stmt->bindParam(":titel", $_POST['review-titel']);
        $stmt->bindParam(":beschrijving", $_POST['Beschrijving']);
        $stmt->bindParam(":sterren", $_POST['Sterren']);
        $stmt->execute();
        redirect("userprofiles.php");
    } else {
        redirect("userprofiles.php");
    }
}