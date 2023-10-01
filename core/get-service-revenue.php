<?php
    include_once("../includes/DBConnection.php");

    $service = new stdClass;

    $service_name = isset($_POST['serviceName']) ? $_POST['serviceName'] : 1;

    // Get revenue per kwacha record by service name
    $getServiceQuery = "SELECT * FROM services WHERE name = '$service_name'";
    $serviceResult = $conn->query($getServiceQuery);
    $serviceRow = $serviceResult->fetch_assoc();
    $revenuePerKwacha = $serviceRow["revenue_per_kwacha"];

    $service->revenuePerKwacha = $revenuePerKwacha;
    $service->serviceName = $service_name;

    header("Content-type: application/json");
    echo json_encode([
        "data" => $service
    ]);
	
	return;
?>