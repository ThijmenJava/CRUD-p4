<?php 

include("includes/connect.php");

function showReview($sql) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
            $query = "SELECT * FROM reizen WHERE reisID = :reisID";
            $stmt2 = $conn->prepare($query);
            $stmt2->bindParam("reisID", $value['reisID']);
            $stmt2->execute();
            $row = $stmt2->fetch();
            echo "<div class='div-review'>";
                echo "<div class='pending-plek'>";
                    if($value['validatie'] == 1) {
                        echo "<h4 class='font'>Pending</h4>";
                    } else {
                        echo "<h4 class='font-done'>Approved</h4>";
                    }
                echo "</div>";
                echo "<div class='titel-plek'>";
                    echo "<h4 class='font'>{$row['titel']}</h4>";
                echo "</div>";
                echo "<div class='text-blok'>";
                    echo "<textarea class='text-blok' readonly>{$value['beschrijving']}</textarea>";
                echo "</div>";
                echo "<div class='sterren-plek'>";
                    for($i = 0; $i < $value['sterren']; $i++) {
                        echo "<i class='fa-solid fa-star'></i>";
                    }
                echo "</div>";
                echo "<div class='button-plek'>";
                    echo "<a href='php/deletereview.php?ID={$value['recensieID']}'><button class='button'>Delete</button></a>";
                echo "</div>";
            echo "</div>";   
        }
    }
}