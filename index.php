<?php
//data base connecting script
include("connect.php");

if($_SERVER["REQUEST_METHOD"]){
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $country= $_POST['country'];
    $message= $_POST['message']

    $sql_query = "INSERT INTO Prayer_request(full_name, phone, date, country, message)
    VALUES ('$full_name', '$sphone', '$date', '$country', '$message')";

    if ($conn->query($query)===TRUE){
        echo "New details Entry Inserted successfully";
    }else{
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
    $conn->close();
?>`