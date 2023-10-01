<?php
    header("Content-type: application/json");
    include_once("../includes/DBConnection.php");

    $boothName = isset($_POST['boothName']) ? $_POST['boothName'] : 'Sample Name';
    $service = isset($_POST['service']) ? $_POST['service'] : 'Opay';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;

    // Fetch service and use appropriate revenue per kwacha value
    $getServiceQuery = "SELECT * FROM services WHERE name = '$service'";
    $serviceResult = $conn->query($getServiceQuery);
    $serviceRow = $serviceResult->fetch_assoc();
    $serviceRevenuePerKwacha = $serviceRow["revenue_per_kwacha"];

    // Get booth using given booth name
    $getBoothQuery = "SELECT * FROM booths WHERE name = '$boothName'";
    $boothResult = $conn->query($getBoothQuery);
    $boothRow = $boothResult->fetch_assoc();
    $location = $boothRow["location"];

    $query =  "INSERT INTO transactions (booth_name, location, service, revenue_per_kwacha, amount, transaction_id)
        VALUES ('$boothName','$location','$service','$serviceRevenuePerKwacha','$amount',0)";

    $res = $conn->query($query);

    // Fetch newly inserted transaction's id
    $id = $conn->insert_id;

    // Pad the second part of the returned id and concatenate WB
    $paddedId = str_pad($id,8,"0",STR_PAD_LEFT);
    $transactionId = 'WB'. $paddedId;

    $update_query = "UPDATE transactions SET transaction_id = '$transactionId' where id = '$id'";

    if($conn->query($update_query) === TRUE){
        $msg = "Transaction Successfully Created!";
    }else {
        $msg = "Transaction creation failed!";
    }

    header("Content-type: application/json");
    echo json_encode([
        "status" => 200,
        "message" => $msg
    ]);

    $conn->close();
?>