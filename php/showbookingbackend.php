<?php

include("../includes/connect.php");

function showBooking($query) {
    global $conn;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
            $qeury = "SELECT * FROM users WHERE accountID = :ID";
            $stmt2 = $conn->prepare($qeury);
            $stmt2->bindParam(":ID", $value['userID']);
            $stmt2->execute();
            $row = $stmt2->fetch();
            
            $qeury2 = "SELECT * FROM reizen WHERE reisID = :reisID";
            $stmt3 = $conn->prepare($qeury2);
            $stmt3->bindParam(":reisID", $value['reisID']);
            $stmt3->execute();
            $row2 = $stmt3->fetch();

            echo "<div class='blok-4'>";
                echo "<div class='titel-plek'> <h4>{$row['naam']}</h4> </div>";
                echo "<div class='titel-plek'> <h4>{$row2['titel']}</h4> </div>";
                echo "<div class='button-plek'> <a href='../php/deletebooking.php?ID={$value['boekingID']}'><button class='button'>Delete</button></a> </div>";
            echo "</div>";
        }
    }
}