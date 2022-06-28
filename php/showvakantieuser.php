<?php

include("includes/connect.php");

function showVakantie($sql) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
            $sql = "SELECT * FROM reizen WHERE reisID = :reisID";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":reisID", $value['reisID']);
            $stmt->execute();
            $row = $stmt->fetch();
            
            echo "";
            echo "<div class='div-show-vakantie'>";
                echo "<div class='image-div'>";
                    echo "<img class='img' src='{$row['image']}'>";
                echo "</div>";
                echo "<div class='info-plek'>";
                    echo "<div class='titel-plek'>";
                        echo "<h4>{$row['titel']}</h4>";
                    echo "</div>";
                    echo "<div class='land-plek'>";
                        echo "<h5 class='land-titel'>{$row['land']}</h5>";
                    echo "</div>";
                    echo "<div class='beschrijving-plek'>";
                        echo "<p class='font'>{$row['kleinebeschrijving']}</p>";
                    echo "</div>";
                    echo "<div class='button-plek'>";
                        echo "<a href='php/vakantieannuleren.php?ID={$value['boekingID']}'><button class='button'>Annuleren</button></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }
}