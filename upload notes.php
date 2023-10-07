<!DOCTYPE html>
<html>
<head>
  <title>PDF Upload and Viewer</title>
  <style>
    body {
      background-color: #000;
      color: #fff;
    }

    h1 {
      color: #ff8c00;
    }

    .pdf-preview {
      display: flex;
      flex-wrap: wrap;
    }

    .pdf-preview-item {
      width: 33.33%;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }

    input[type="file"] {
      background-color: #222;
      color: #fff;
      border: 1px solid #ff8c00;
      padding: 5px;
    }

    input[type="submit"] {
      background-color: #ff8c00;
      color: #000;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #000;
      color: #ff8c00;
    }

    a {
      color: #ff8c00;
      text-decoration: none;
    }

    a:hover {
      color: #ff4500;
    }

    embed {
      border: 2px solid #ff8c00;
    }
  </style>
</head>
<body>
  <?php
  // Database connection details
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

  // Check if the form is submitted
  if (isset($_POST["submit"])) {
    // Validate and move the uploaded file
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file extension
    $allowedExtensions = array("pdf");
    if (!in_array($imageFileType, $allowedExtensions)) {
      echo "Invalid file format. Only PDF files are allowed.";
      $uploadOk = 0;
    }

    if ($uploadOk == 1) {
      // Move the uploaded file to the target directory
      if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
       

        // Store file information in the database
        $filename = $_FILES["pdfFile"]["name"];
        $filesize = $_FILES["pdfFile"]["size"];
        $timestamp = date("Y-m-d H:i:s");

        // Execute an SQL query to insert file information into the table
        $sql = "INSERT INTO cseanotes (filename, filesize, upload_time, filepath) VALUES ('$filename', $filesize, '$timestamp', '$targetFile')";
        if (mysqli_query($conn, $sql)) {

        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      } else {
        echo "Error uploading the file.";
      }
    }
  }
  ?>

  <h1>Class Notes</h1>

  <!-- Upload Form -->
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="pdfFile" />
    <input type="submit" name="submit" value="Upload" />
  </form>
  <br>
  <br>

  <!-- Fetch and display the PDF files -->
  <?php
  // Execute an SQL query to fetch file information
  $sql = "SELECT * FROM cseanotes";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<div class="pdf-preview">';
    while ($row = mysqli_fetch_assoc($result)) {
      $fileID = $row["id"];
      $fileName = $row["filename"];
      $filePath = $row["filepath"];

      // Display the PDF preview image and link to open the PDF
      echo '<div class="pdf-preview-item">';
      echo '<img src="pdf-icon.png" alt="PDF Preview" width="150" height="150" /><br>';
      echo "<a href='viewpdf.php?id=$fileID' target='_blank'>$fileName</a>";
      echo '</div>';
    }
    echo '</div>';
  } else {
    echo "No files found.";
  }
  ?>

  <!-- Display the PDF based on the provided ID in the URL -->
  <?php
  if (isset($_GET["id"])) {
    $fileID = $_GET["id"];
    // Execute an SQL query to fetch the file path based on the provided ID
    $sql = "SELECT filepath FROM cseanotes WHERE id = $fileID";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $filePath = $row["filepath"];

      // Display the PDF file
      echo "<a href='$filePath' target='_blank'><embed src='$filePath' width='500' height='600' type='application/pdf'></a>";
    } else {
      echo "File not found.";
    }
  }

  // Close the database connection
  mysqli_close($conn);
  ?>
</body>
</html>
