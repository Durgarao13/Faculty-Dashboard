<?php
// Retrieve form data
$fullName = $_POST['FullName'];
$reason = $_POST['Reason'];
$studentID = $_POST['StudentID'];
$leaveDuration = $_POST['noofdaysleave'];
$startDate = $_POST['StartDate'];
$endDate = $_POST['EndDate'];

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "facultydashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO `pending requests` (`Name_of_student`, `Student ID`, `Reason`, `No_of_Days`, `StartDate`, `EndDate`) VALUES (?, ?, ?, ?, ?,?)");


$stmt->bind_param("ssssss", $fullName,  $studentID,$reason, $leaveDuration, $startDate, $endDate);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Leave request submitted successfully.";
} else {
    echo "Error submitting leave request.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
