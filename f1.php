<?php
$ee=$_POST['emailID'];
$conn = new mysqli('localhost', 'root', '', 'facultydashboard');
if($conn->connect_error){
  die('Connection failed : ' . $conn->connect_error);
}

$sql = "SELECT emailID from adsignup where emailID='$ee'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $otp = rand(100000,999999);

    session_start();
    session_regenerate_id();
    $_SESSION['otp'] = $otp;
    $_SESSION['emailID']=$ee;
    header('Location:f2.php');

}
else{
  echo '<script>alert("Email not registered!!!"); </script>';
  echo '<script> window.location.href = "forgot.html";</script>';
}
$conn->close();
?>
