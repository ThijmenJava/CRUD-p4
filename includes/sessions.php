<?php

include("util.php");

session_start();

$name = $_SESSION["name"];

if (empty($name)) {
    redirect("../index.php");
}