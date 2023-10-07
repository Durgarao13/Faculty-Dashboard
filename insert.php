<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facultydashboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $department = $_POST["department"];
  $contact = $_POST["contact"];
  $qualification = $_POST["qualification"];

  $sql = "UPDATE profile SET designation='$designation', department='$department', contact='$contact', qualification='$qualification' WHERE contact='$contact'";

  if (mysqli_query($conn, $sql)) {
    header('Location: form.php');
    
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
