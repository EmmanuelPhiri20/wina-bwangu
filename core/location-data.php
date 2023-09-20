<?php
// Simulated data (you can replace this with data from your source)
    $options = array("Wina1", "Wina2", "Wina3", "Wina4");

    // Add search bar to the top of the dropdown options
    echo '<li><input class="dropdown-item" type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"></li>';

    // Generate the dropdown options
    foreach ($options as $option) {
        echo '<li><a class="dropdown-item" href="#">' . $option . '</a></li>';
    }
?>
