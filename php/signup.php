<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submitr"])) {
    $email = $_POST["email"];
    $naam = $_POST["naam"];
    $wachtwoord = $_POST["wachtwoord"];

    if (empty($email) || empty($naam) || empty($wachtwoord)) {

    }
}
