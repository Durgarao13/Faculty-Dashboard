<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 50%;
        }

        th, td {
            border: 1px solid #ffffff;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #FFA500;
        }

        tr:nth-child(even) {
            background-color: #333333;
        }

        form {
            display: inline-block;
            margin-bottom: 10px;
        }

        .add-test {
            text-align: center;
            margin-top: 10px;
        }

        .add-test form input[type="submit"] {
            background-color: #FFA500;
            color: #ffffff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-test form input[type="submit"]:hover {
            background-color: #FF8C00;
        }
    </style>
</head>
<body>
    <h1>Student Marks</h1>
    <?php
    // Check if roll_number parameter is set
    if (isset($_GET['roll_number'])) {
        // Get the roll_number from the parameter
        $roll_number = $_GET['roll_number'];

        // Establish database connection
        $conn = new mysqli("localhost", "root", "", "facultydashboard");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch student details
        $sql = "SELECT * FROM studentdetails WHERE roll_number = '$roll_number'";
        $result = $conn->query($sql);
        $student = $result->fetch_assoc();

        // Fetch marks for the student
        $sql = "SELECT * FROM marks WHERE roll_number = '$roll_number'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Marks for: " . $student['name'] . "</h2>";
            echo "<table>";
            echo "<tr><th>Test Name</th><th>Marks</th><th>Actions</th></tr>";

            // Output marks for each test
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["TestName"]."</td>";
                echo "<td>";
                echo "<form method='post' action='update_marks.php'>";
                echo "<input type='hidden' name='roll_number' value='$roll_number'>";
                echo "<input type='hidden' name='TestName' value='".$row["TestName"]."'>";
                echo "<input type='number' name='marks' value='".$row["marks"]."'>";
                echo "<input type='submit' value='Update'>";
                echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form method='post' action='delete_marks.php'>";
                echo "<input type='hidden' name='roll_number' value='$roll_number'>";
                echo "<input type='hidden' name='TestName' value='".$row["TestName"]."'>";
                echo "<input type='submit' value='Delete'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No marks found for the selected student.</p>";
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "<p>Invalid roll number.</p>";
    }
    ?>
    <div class="add-test">
        <form method="post" action="add_test.php">
            <input type="hidden" name="roll_number" value="<?php echo $roll_number; ?>">
            <label for="new_test_name">New Test Name:</label>
            <input type="text" name="new_test_name" id="new_test_name" required>
            <input type="submit" value="Add New Test">
        </form>
    </div>
</body>
</html>
