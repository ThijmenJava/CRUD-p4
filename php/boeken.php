<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $query = "SELECT * FROM users WHERE naam = :naam AND wachtwoord = :wachtwoord AND email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":naam", $naam);
    $stmt->bindParam(":wachtwoord", $wachtwoord);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $row = $stmt->fetch();
    if($stmt->rowCount() == 1) {
        $query = "INSERT INTO bookingen(reisID, userID) VALUES (:reisID, :userID)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":reisID", $_GET['ID']);
        $stmt->bindParam(":userID", $row['accountID']);
        $stmt->execute();
        redirect("../booking.php");
    } else {
        redirect("../boekvakantie.php?ID=".$_GET['ID']);
    }
} 