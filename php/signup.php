<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit-signup"])) {
    $email = $_POST["email"];
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];

    if (empty($email) || empty($naam) || empty($wachtwoord)) {
        $error = "You need to fill all forms!";
        echo "You need to fill all forms!";
        redirect("../login.php");
    } else {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if($stmt->rowCount() == 1) {
            redirect("../login.php");
        } else {
            $query = "INSERT INTO users(naam, wachtwoord, email, admin) VALUES (:naam, :wachtwoord, :email, 1)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":naam", $naam);
            $stmt->bindParam(":wachtwoord", $wachtwoord);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            redirect("../login.php");
        }
    }
}
