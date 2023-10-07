<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
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
            width: 80%;
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

        tr:hover {
            background-color: #666666;
        }
        
        /* Add link styles */
        .student-link {
            color: #ffffff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>CGPA</th>
        </tr>
        <?php
        // Establish database connection
        $conn = new mysqli("localhost", "root", "", "facultydashboard");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Fetch data from the table
        $sql = "SELECT * FROM studentdetails";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td><a class='student-link' href='marks.php?roll_number=".$row["roll_number"]."'>".$row["name"]."</a></td>";
                echo "<td>".$row["roll_number"]."</td>";
                echo "<td>".$row["mobile_number"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["CGPA"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        
        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>
</html>