<?php
    header("Content-type: application/json");
    include_once("../includes/DBConnection.php");

    $cumulativeCalculation = new stdClass;

    $boothName = isset($_POST['booth']) ? $_POST['booth'] : 'Wina1';
    $service = isset($_POST['service']) ? $_POST['service'] : 'Airtel Money';

    // Queries
    $searchQuery = "SELECT * FROM transactions WHERE booth_name = '$boothName' AND service = '$service'";
    $getService = "SELECT * FROM services WHERE name = '$service'";
    
    $transactionResults = $conn->query($searchQuery);
    $serviceResult = $conn->query($getService);

    $serviceRow = $serviceResult->fetch_assoc();
    $cumulativeCalculation->transactionCount = $transactionResults->num_rows;
    $cumulativeCalculation->totalAmount = 0;
    $cumulativeCalculation->monthlyServiceLimit = $serviceRow["monthly_limit"];
    $cumulativeCalculation->monthlyLimitBalance = 0;

    if ($transactionResults->num_rows > 0) {
        // output data of each row
        while($row = $transactionResults->fetch_assoc()) {
          $cumulativeCalculation->totalAmount += $row["amount"];
        }
    } else {
    echo "0 results";
    }

    // Monthly limit balance is the remaining monthly service limit once the total transaction amount for that 
    // service has been deducted.
    $cumulativeCalculation->monthlyLimitBalance = $cumulativeCalculation->monthlyServiceLimit - $cumulativeCalculation->totalAmount;
    // Cumulative revenue per kwacha is service revenue per kwacha multiplied by the total transactions amount
    $cumulativeCalculation->revenuePerKwacha = $serviceRow["revenue_per_kwacha"] * $cumulativeCalculation->totalAmount;

    header("Content-type: application/json");
    echo json_encode([
        "status" => 200,
        "response" => $cumulativeCalculation
    ]);

    $conn->close();
?>