<html>
<head>
    <title>forgot password</title>
    <link rel="stylesheet" type="text/css" href="forgot.css">
</head>
<body>
    <center>
        <table cellspacing="10">
            <tr>
                <td ><br><br><br><br><br><img src="L1.png" alt="logo"></td>
                <td><div class="form">
                    <p><b>RESET PASSWORD</b></p>
                    <form action="f1.php"  method="post">
                        <input required type="email" id="email" name="emailID" placeholder="E-mail">
                        <?php if (isset($error)) { ?>
                            <p class="error"><?php echo $error; ?></p>
                          <?php } ?>
                        <button required type ="submit"  style="background-color: #31527f; color: orange; font-weight: bolder;" >Send Code</button>
                    </form>
                    </div></td>
            </tr>
        
    
    </table></center>
</body>

</html>