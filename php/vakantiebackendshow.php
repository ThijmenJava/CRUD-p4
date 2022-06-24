<?php

include("includes/connect.php");
include("includes/util.php");

if(empty($_GET['BES']) || empty($_GET['PER']) || empty($_GET['BEGIN']) || empty($_GET['EIND'])) {
    $query = "SELECT * FROM reizen ORDER BY reisID ASC";
} else {
    $bestemming = $_GET['BES'];
    $personen = $_GET['PER'];
    $begin = $_GET['BEGIN'];
    $eind = $_GET["EIND"];
    $query = "SELECT * FROM reizen WHERE land LIKE :land AND personen < :per AND startdatum = :begin AND einddatum = :eind";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":land", $bestemming);
    $stmt->bindParam(":land", $bestemming);
    $stmt->bindParam(":land", $bestemming);
    $stmt->bindParam(":land", $bestemming);

}

if(isset($_POST['submit'])) {

} else {
    
}

function showVakantie() {
    global $query;
    global $conn;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
          echo "<div class='vakantie-plek'>";
            echo "<div class='blok-1'>";
                echo "<img class='foto' src='{$value['image']}' alt=''>";
            echo "</div>";
            echo "<div class='blok-2'>";
                echo "<div class='titel'>";
                    echo "<h4> {$value['titel']} </h4>";
                echo "</div>";
                echo "<div class='land-titel'>";
                    echo "<h5 class='land-font'> {$value['land']} </h5>";
                echo "</div>";
                echo "<div class='info-plek'>";
                    echo "<p> {$value['kleinebeschrijving']} </p>";
                echo "</div>";
                echo "<div class='util-plek'>";
                    echo "<div class='prijs-plek'>";
                        echo "<p class='geld-font'> {$value['kosten']},- </p>";
                    echo "</div>";
                    echo "<div class='button-plek'>";
                        echo "<a href='vakantieinfo.php?ID={$value['reisID']}'><button class='button-style'>Nu Bekijken</button></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
          echo "</div>";  
        }
    } else {
        echo "No results!";
    }
}