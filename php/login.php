<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];

    var_dump($_POST);
    if (empty($email) || empty($naam) || empty($wachtwoord)) {
        $error = "You need to fill all forms!";
        redirect("../test.php");
    } else {
        $query = "SELECT * FROM users WHERE naam = :naam AND wachtwoord = :wachtwoord";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":naam", $naam);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            redirect("../adminhome.php");
        } else {
            redirect("../test.php");
        }
    }
}

function printError(): string {
    global $error;
    return $error;
}

