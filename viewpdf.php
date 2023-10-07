<?php
// Database connection details
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

// Check if the ID parameter is provided in the URL
if (isset($_GET["id"])) {
  $fileID = $_GET["id"];

  // Execute an SQL query to fetch the file path based on the provided ID
  $sql = "SELECT filepath FROM cseanotes WHERE id = $fileID";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $filePath = $row["filepath"];

    // Display the PDF file
    header("Content-type: application/pdf");
    readfile($filePath);
  } else {
    echo "File not found.";
  }
}

// Close the database connection
mysqli_close($conn);
?>
