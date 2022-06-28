<?php 

include("../includes/connect.php");

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
            $query = "SELECT * FROM users WHERE accountID = :id";
            $stmt2 = $conn->prepare($query);
            $stmt2->bindParam("id", $value['userID']);
            $stmt2->execute();
            $row2 = $stmt2->fetch();
            echo "<div class='div-review'>";
                echo "<div class='pending-plek'>";
                    echo "<h4 class='font-black'>{$row2['naam']}</h4>";
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
                    echo "<div class='submit-plek'>";
                        echo "<a href='../php/reviewdeletebackend.php?ID={$value['recensieID']}'><button class='submit'>Delete</button></a>";
                    echo "</div>";
                    echo "<div class='submit-plek'>";
                        echo "<a href='../php/validerenreview.php?ID={$value['recensieID']}'><button class='submit'>Valideren</button></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";   
        }
    }
}