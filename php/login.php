<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

session_start();

$_SESSION['email'] = "";

if (isset($_POST["submit"])) {
    $_SESSION['email'] = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_SESSION['email'];

    var_dump($_POST);
    if (empty($email) || empty($wachtwoord)) {
        $error = "You need to fill all forms!";
        redirect("../login.php");
    } else {
        $query = "SELECT * FROM users WHERE email = :email AND wachtwoord = :wachtwoord";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $query = "SELECT admin FROM users WHERE email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $row = $stmt->fetch();
            if($row['admin'] == 0) {
                redirect("../admin/adminhome.php");
            } else {
                redirect("../userprofiles.php");
            }
        } else {
            redirect("../login.php");
        }
    }
}

function printError(): string {
    global $error;
    return $error;
}

