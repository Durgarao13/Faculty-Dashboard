<?php
// Check if roll_number parameter is set
if (isset($_POST['roll_number']) && isset($_POST['new_test_name'])) {
    // Get the roll_number and new_test_name from the form
    $roll_number = $_POST['roll_number'];
    $new_test_name = $_POST['new_test_name'];

    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "facultydashboard");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert new test into the marks table
    $sql = "INSERT INTO marks (roll_number, TestName) VALUES ('$roll_number', '$new_test_name')";
    if ($conn->query($sql) === TRUE) {
        echo "New test added successfully.";
    } else {
        echo "Error adding test: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
