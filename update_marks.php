<?php
// Check if roll_number, TestName, and marks are set
if (isset($_POST['roll_number'], $_POST['TestName'], $_POST['marks'])) {
    // Get the roll_number, TestName, and marks from the form data
    $roll_number = $_POST['roll_number'];
    $TestName = $_POST['TestName'];
    $marks = $_POST['marks'];

    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "facultydashboard");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the marks for the specific student and test
    $sql = "UPDATE marks SET marks = '$marks' WHERE roll_number = '$roll_number' AND TestName = '$TestName'";
    if ($conn->query($sql) === TRUE) {
        echo "Marks updated successfully.";
    } else {
        echo "Error updating marks: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
