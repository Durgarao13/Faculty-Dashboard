
<?php
    //    $username = $_POST['username'];
    //    $password = $_POST['password'];
        $conn = new mysqli('localhost', 'root', '', 'facultydashboard');
        if($conn->connect_error){
            die('Connection failed : ' . $conn->connect_error);
} else {
    $sql = mysqli_query(
        $conn,
        "SELECT * FROM adsignup WHERE username='". $_POST["username"] . "' AND password='" . $_POST["password"] . "'    ");
            $num = mysqli_num_rows($sql);
   
            if($num > 0) {
                $row = mysqli_fetch_array($sql);
                header('Location: form.php');
                exit();
            }
            else{
                echo '<script>alert("INVALID CREDENTIALS!!!!!!!!!!!!!");</script>';
                echo '<script>window.location.href = "adminlogin.html";</script>';
        exit();
            }
}

    ?>