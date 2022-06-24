<?php

include("../includes/connect.php");

global $conn;

function showVakantieTable() {
    global $conn, $error;
    $query = "SELECT * FROM reizen ORDER BY reisID ASC";
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($result)) {
        foreach ($result as $value) {
            echo "<tr class='border-table'>";
                echo "<td> <form method='post' action='../php/updatevakantie.php''><input class='small-input' type='text' value='{$value["reisID"]}' name='id' readonly > </td>";
                echo "<td> <input class='' type='text' name='land' value='{$value["land"]}'> </td>";
                echo "<td> <input class='' type='date' name='startdatum' value='{$value["startdatum"]}'> </td>";
                echo "<td> <input class='' type='date' name='einddatum' value='{$value["einddatum"]}'> </td>";
                echo "<td> <input class='' type='number' name='prijs' value='{$value["kosten"]}'> </td>";
                echo "<td> <input class='' type='text' name='titel' value='{$value["titel"]}'> </td>";
                echo "<td> <input class='' type='number' name='personen' value='{$value["personen"]}'> </td>";
                echo "<td> <input class='' type='text' name='kleinebeschrijving' value='{$value["kleinebeschrijving"]}'> </td>";
                echo "<td> <input class='' type='text' name='beschrijving' value='{$value["beschrijving"]}'> </td>";
                echo "<td> <input class='' type='text' name='image' value='{$value["image"]}'> </td>";
                echo "<td> <input class='' value='Update' type='submit' name='submit'></form> </td>";
                echo "<td> <a href='../php/deletereis.php?ID={$value["reisID"]}'><button class=''>Delete</button></a> </td>";
            echo "</tr>";
        }
    } 
}

?>