<?php
    header("Content-type: application/json");
    include_once("../includes/DBConnection.php");

    $boothName = isset($_POST['boothName']) ? $_POST['boothName'] : 'Sample Name';
    $location = isset($_POST['location']) ? $_POST['location'] : 'Mazabuka';
    $service = isset($_POST['service']) ? $_POST['service'] : 'Opay';
    $revenuePerKwacha = isset($_POST['revenuePerKwacha']) ? $_POST['revenuePerKwacha'] : 0.05;
    $amount = isset($_POST['amount']) ? $_POST['amount'] : 234.0;

    $query =  "INSERT INTO transactions (booth_name, location, service, revenue_per_kwacha, amount, transaction_id)
        VALUES ('$boothName','$location','$service','$revenuePerKwacha','$amount',0)";

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