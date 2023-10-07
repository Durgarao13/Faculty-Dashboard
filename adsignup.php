<?php

$username = $_POST['username'];
$name = $_POST['name'];
$emailID = $_POST['emailID'];
$mobile_number = $_POST['mobile_number'];
$password = $_POST['password'];
$year = $_POST['year'];


$conn = new mysqli('localhost', 'root', '', 'facultydashboard');
if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into adsignup(username, name, emailID, mobile_number, password, year)
        values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $name, $emailID, $mobile_number, $password, $year);
    $stmt->execute();
    header('Location: adminlogin.html');
    $stmt->close();
    $conn->close();
}
?>