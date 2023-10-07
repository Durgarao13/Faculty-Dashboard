<!DOCTYPE html>
<html>
<head>
    <title>Approved and Rejected Requests</title>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        h1 {
            color: orange;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            padding: 10px;
            border: 1px solid white;
        }

        th {
            background-color: orange;
        }
    </style>
</head>
<body>
    <h1>Approved Requests</h1>
    <?php
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

    // Fetch the approved requests from the approved requests table
    $query = "SELECT * FROM `approved requests`";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Student ID</th><th>Reason</th><th>No. of Days</th><th>Start Date</th><th>End Date</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Name_of_student'] . '</td>';
            echo '<td>' . $row['Student ID'] . '</td>';
            echo '<td>' . $row['Reason'] . '</td>';
            echo '<td>' . $row['No_of_Days'] . '</td>';
            echo '<td>' . $row['StartDate'] . '</td>';
            echo '<td>' . $row['EndDate'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No approved requests found.</p>';
    }

    // Close the database connection
    mysqli_close($connection);
    ?>

    <h1>Rejected Requests</h1>
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

    // Fetch the rejected requests from the rejected requests table
    $query = "SELECT * FROM `rejected requests`";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Student ID</th><th>Reason</th><th>No. of Days</th><th>Start Date</th><th>End Date</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Name_of_student'] . '</td>';
            echo '<td>' . $row['Student ID'] . '</td>';
            echo '<td>' . $row['Reason'] . '</td>';
            echo '<td>' . $row['No_of_Days'] . '</td>';
            echo '<td>' . $row['StartDate'] . '</td>';
            echo '<td>' . $row['EndDate'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No rejected requests found.</p>';
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
</body>
</html>
