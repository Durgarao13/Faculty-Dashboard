<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .dark-theme {
            background-color: #222;
            color: #fff;
            margin: 0 auto;
            max-width: 800px;
        }

        .dark-theme th,
        .dark-theme td {
            padding: 10px;
        }

        .dark-theme th {
            font-weight: bold;
        }

        .dark-theme tr:nth-child(even) {
            background-color: #333;
        }

        .dark-theme tr:nth-child(odd) {
            background-color: #444;
        }

        .dark-theme button {
    background-color: #ff8c00;
    color: #fff;
    border: none;
    padding: 5px 15px; /* Updated padding */
    cursor: pointer;
    margin-right: 15px; /* Updated margin-right */
    transition: background-color 0.3s; /* Add transition effect */
}

.dark-theme button:first-child {
    margin-right: 5px; /* Apply smaller margin to the first button */
}
.dark-theme th:nth-child(7),
.dark-theme td:nth-child(7) {
    width: 180px; /* Adjust the width as per your requirement */
}



        .dark-theme button:hover {
            background-color: #ffa500; /* Apply hover background color */
        }

        .heading {
            font-size: 24px;
            font-weight: bold;
            color: orange;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="heading">Pending Leave Requests</h1>
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

    // Fetch data from the table
    $query = "SELECT * FROM `pending requests`";
    $result = mysqli_query($connection, $query);

    // Display the data in a table with dark theme
    echo "<table class='dark-theme'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>ID</th>";
    echo "<th>Reason</th>";
    echo "<th>No. of Days</th>";
    echo "<th>Start Date</th>";
    echo "<th>End Date</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['Name_of_student'];
        $id = $row['Student ID'];
        $reason = $row['Reason'];
        $noOfDays = $row['No_of_Days'];
        $startDate = $row['StartDate'];
        $endDate = $row['EndDate'];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$id</td>";
        echo "<td>$reason</td>";
        echo "<td>$noOfDays</td>";
        echo "<td>$startDate</td>";
        echo "<td>$endDate</td>";
        echo "<td>";
        echo "<form method='post' action='process_leave.php'>";
        echo "<input type='hidden' name='leave_id' value='$id'>";
        echo "<button type='submit' name='approve'>Approve</button>";
        echo "<button type='submit' name='reject'>Reject</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Close the database connection
    mysqli_close($connection);
    ?>
</body>
</html>
