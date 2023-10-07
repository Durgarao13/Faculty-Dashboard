<?php
// Assuming you have already established a database connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'facultydashboard';

// Create a new database connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted and the leave_id is set
if (isset($_POST['leave_id'])) {
    $leaveId = $_POST['leave_id'];

    // Fetch the leave request from the pending requests table
    $query = "SELECT * FROM `pending requests` WHERE `Student ID` = '$leaveId'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row['Name_of_student'];
        $id = $row['Student ID'];
        $reason = $row['Reason'];
        $noOfDays = $row['No_of_Days'];
        $startDate = $row['StartDate'];
        $endDate = $row['EndDate'];

        // Insert the leave request into the appropriate table based on approval or rejection
        if (isset($_POST['approve'])) {
            $query = "INSERT INTO `approved requests` (`Name_of_student`, `Student ID`, `Reason`, `No_of_Days`, `StartDate`, `EndDate`) 
                      VALUES ('$name', '$id', '$reason', '$noOfDays', '$startDate', '$endDate')";
        } elseif (isset($_POST['reject'])) {
            $query = "INSERT INTO `rejected requests` (`Name_of_student`, `Student ID`, `Reason`, `No_of_Days`, `StartDate`, `EndDate`) 
                      VALUES ('$name', '$id', '$reason', '$noOfDays', '$startDate', '$endDate')";
        }

        // Execute the query
        mysqli_query($connection, $query);

        // Delete the leave request from the pending requests table
        $deleteQuery = "DELETE FROM `pending requests` WHERE `Student ID` = '$leaveId'";
        mysqli_query($connection, $deleteQuery);
    }
}

// Close the database connection
mysqli_close($connection);
?>
