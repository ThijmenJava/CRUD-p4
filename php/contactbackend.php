<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if($_POST["submit"]) {
    $naam = $_POST["name"];
    $email = $_POST["email"];
    $onderwerp = $_POST["subject"];
    $beschrijving = $_POST["textarea"];
    if(empty($naam) || empty($email) || empty($onderwerp) || empty($beschrijving)) {
        redirect("../contact.php");
    } else {
        $query = "INSERT INTO contact(naam, email, onderwerp, bericht) VALUES (:naam, :email, :onderwerp, :bericht)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":naam", $naam);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":onderwerp", $onderwerp);
        $stmt->bindParam(":bericht", $beschrijving);
        $stmt->execute();
        redirect("../contact.php");
    }
}