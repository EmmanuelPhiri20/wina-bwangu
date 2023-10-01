<?php
    include_once("../includes/DBConnection.php");

    // Get booth using given booth name
    $getBoothQuery = "SELECT * FROM booths";
    $boothResult = $conn->query($getBoothQuery);

    // Add search bar to the top of the dropdown options
    echo '<li><input class="dropdown-item" type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"></li>';

    // Generate the dropdown options
    while ($row = $boothResult->fetch_assoc()) {
        echo '<li><a class="dropdown-item booth" href="#" data-booth-id="'. $row["id"] .'">' . $row["name"] . '</a></li>';
    }
?>
