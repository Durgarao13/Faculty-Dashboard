


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


$paper_id = $_POST["paper_id"];
  $title = $_POST["title"];
  $aoi= $_POST["aoi"];
  $institute = $_POST["institute"];
  $year = $_POST["year"];
  if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into publications(paper_id, title, aoi, institute, year)
        values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $paper_id, $title, $aoi, $institute, $year);
    $stmt->execute();
    header('Location: form.php');
    $stmt->close();
    $conn->close();
}
?>