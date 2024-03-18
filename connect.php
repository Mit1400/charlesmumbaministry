<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database="details"; 

$conn=mysqli_connect($servername, $username, $password, $confirm, $database);

if(!$conn->connect_error){
    die("connection failed: ". $conn->connect_error); 
}
?>