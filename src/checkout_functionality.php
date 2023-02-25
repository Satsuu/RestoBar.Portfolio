<?php

include("connection.php");
include("./admin/admin_connection.php");

if(isset($_POST['order-btn'])){
    $client_name = $_POST['client_name'];
    $client_address = $_POST['client_address'];
    $client_number = $_POST['client_number'];
    $client_notes = $_POST['client_notes'];
    $client_payment = $_POST['client_payment'];


    $insert_query = mysqli_query($admin_connection, "INSERT into ollies_customer (client_name,client_address,client_number,client_notes,client_payment)
    VALUES ('$client_name', '$client_address', '$client_number', '$client_notes', '$client_payment')");
    header("Location: receipt.php?client_id={$admin_connection->insert_id}");
}



?>