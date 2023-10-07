<?php
// Check if roll_number parameter is set
if (isset($_POST['roll_number']) && isset($_POST['TestName'])) {
    // Get the roll_number and TestName from the form
    $roll_number = $_POST['roll_number'];
    $test_name = $_POST['TestName'];

    // Establish database connection
    $conn = new mysqli("localhost", "root", "", "facultydashboard");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the test from the marks table
    $sql = "DELETE FROM marks WHERE roll_number = '$roll_number' AND TestName = '$test_name'";
    if ($conn->query($sql) === TRUE) {
        echo "Test deleted successfully.";
    } else {
        echo "Error deleting test: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
