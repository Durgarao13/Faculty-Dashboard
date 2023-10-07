<?php

$new=$_POST['password'];
session_start();
session_regenerate_id();

$conn = new mysqli('localhost', 'root', '', 'facultydashboard');
if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
}

$sql = "UPDATE `adsignup` SET `password`='$new' WHERE emailID='$_SESSION[emailID]'";

if($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location:f6.html');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
