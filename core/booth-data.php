<?php
    include_once("../includes/DBConnection.php");
 
    $booth = new stdClass;
    $booth_id = isset($_POST['booth_id']) ? $_POST['booth_id'] : 1;

    // Get booth using given booth name
    $getBoothQuery = "SELECT * FROM booths WHERE id = '$booth_id'";
    $boothResult = $conn->query($getBoothQuery);
    $boothRow = $boothResult->fetch_assoc();
    $boothName = $boothRow["name"];

    // Get services belonging to the selected booth
    // Get booth using given booth name
    $getProvidedServicesQuery = "SELECT * FROM provided_services WHERE booth_name = '$boothName'";
    $providedServicesResult = $conn->query($getProvidedServicesQuery);

    $services = array();

    while($row = $providedServicesResult->fetch_assoc()) {
        $dropDownItem = '<li><a class="dropdown-item serviceRevenue" href="#" data-service-name="'. $row["service_name"] .'">'. $row["service_name"] .'</a></li>';
        array_push($services, $dropDownItem);
    }

    $booth->name = $boothRow["name"];
    $booth->services = $services;
    $booth->location = $boothRow["location"];

    header("Content-type: application/json");
    echo json_encode([
        "data" => $booth
    ]);
	
	return;
?>