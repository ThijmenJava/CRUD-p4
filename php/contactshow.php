<?php

function showContact($query, $path) {
    include($path);
    global $conn;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if(!empty($stmt)) {
        foreach($stmt as $value) {
            echo "<div class='contact-blok'>";
                echo "<div class='send-by'>";
                    echo "<div class='id-plek'>ID: {$value["contactID"]}</div>";
                    echo "<div class='send-by-plek'>Naam: {$value["naam"]}</div>";
                echo "</div>";
                echo "<div class='send-by center'>Email: {$value["email"]}</div>";
                echo "<div class='send-by center'>Onderwerp: {$value["onderwerp"]}</div>";
                echo "<div class='textarea-plek'><textarea readonly class='textarea-content'>{$value["bericht"]}</textarea></div>";
                echo "<div class='button-plek'><a class='a-tag-container' href='../php/deletecontact.php?ID={$value["contactID"]}'><button class='button-style'>Delete</button></a></div>";
            echo "</div>";
        }
    } else {
        echo "No results!";
    }
}
