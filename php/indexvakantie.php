<?php

include("../includes/connect.php");
include("../includes/util.php");

if(isset($_POST["verzenden"])) {
    $bes = $_POST['name'];
    $per = $_POST['personen'];
    $begin = $_POST['begindatum'];
    $eind = $_POST['einddatum'];

    redirect("../booking.php?BES={$bes}&PER={$per}&BEGIN={$begin}&EIND={$eind}");
}

?>  

    