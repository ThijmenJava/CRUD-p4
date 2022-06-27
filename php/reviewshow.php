<?php

include("includes/connect.php");

function showreview($sql) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
            if($value['validatie'] == 0) {
                $query = "SELECT * FROM users WHERE accountID = :userID";
                $stmt2 = $conn->prepare($query);
                $stmt2->bindParam("userID", $value['userID']);
                $stmt2->execute();
                $row = $stmt2->fetch();
                echo "<div class='review'>";
                    echo "<div class='from-plek'>";
                        echo "<h4>{$row['naam']}</h4>";
                    echo "</div>";
                    echo " <div class='titel-reis-plek'>";
                        echo "<h4 class='font-titel'>{$value['titel']}</h4>";
                    echo "</div>";
                    echo "<div class='beschrijving-plek'>";
                        echo "<h5>{$value['beschrijving']}</h5>";
                    echo "</div>";
                    echo "<div class='sterren-plek'>";
                        for($i = 0; $i < $value['sterren']; $i++) {
                            echo "<i class='fa-solid fa-star'></i>";
                        }
                    echo "</div>";
                echo "</div>";
            }
        }
    }
}