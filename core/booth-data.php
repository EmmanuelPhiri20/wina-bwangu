<?php
 
    $booth = new stdClass;
    
    // Simulated data (you can replace this with data from your source)

    $booth_id = isset($_POST['booth_id']) ? $_POST['booth_id'] : 1000;

    $services = array("Airtel Money", "MTN Money", "Zamtel Money", "FNB", "Zanaco");

    switch($booth_id) {
        case 1:
            $booth->name = "Wina1";
            $booth->services = $services;
            $booth->location = "Kamwala";
            break;
        case 2:
            $booth->name = "Wina2";
            $booth->services = $services;
            $booth->location = "Matero";
            break;
        default:
            $booth->name = "Wina3";
            $booth->services = $services;
            $booth->location = "Chazanga";
            return $booth;
    }

    header("Content-type: application/json");
    echo json_encode([
        "data" => $booth
    ]);
	
	return;
?>