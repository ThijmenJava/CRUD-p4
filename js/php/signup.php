<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submitr"])) {
    $email = $_POST["emailr"];
    $naam = $_POST["naamr"];
    $wachtwoord = $_POST["wachtwoordr"];

    if (empty($email) || empty($naam) || empty($wachtwoord)) {
        $error = "You need to fill all forms!";
    } else {
        $query = "INSERT INTO users(email, naam, wachtwoord) VALUES (:email, :naam, :wachtwoord)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":naam", $naam);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        redirect("../admin/adminhome.php");
    }
}

function printError(): string {
    global $error;
    return $error;
}

