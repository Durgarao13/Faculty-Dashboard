<?php
session_start();
session_regenerate_id();
if($_SESSION['otp']==$_POST['otp']){
    header('Location:f4.html');
}else{
    echo '<script>alert("otp doesnot match")</script>';
    echo '<script> window.location.href = "f2.php";</script>';
}