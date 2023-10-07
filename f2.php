<html>
<head>
    <title>otp</title>
    <link rel="stylesheet" type="text/css" href="forgot.css">
</head>
<body>
    <center>
        <table cellspacing="10">
            <tr>
                <td ><br><br><br><br><br><img src="L1.png" alt="logo"></td>
                <td><div class="form">
                    <p><b>ENTER CODE SENT TO YOUR ID.</b></p>
                    <form action="f3.php"  method="post">
                        <input required type="number" id="otp" name="otp" placeholder="Enter Code" value=<?php session_start();echo $_SESSION['otp'];?>>
                        <button required type ="submit"  style="background-color: #31527f; color: orange; font-weight: bolder;" >NEXT</button>
                    </form>
                    </div></td>
            </tr>
        
    
    </table></center>
</body>

</html>