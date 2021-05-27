<?php
include 'EnterOTP_validation.php'
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>OTP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/forgotpp.css">
</head>
<body style="background-color: lightgrey;">
    <div class="greenframe">
        <br><br><br><br>
    <h2 style="text-align: center;">Enter OTP</h2>
        <div class="whiteframe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                <div class="lcontainer">
                    <label for="username"><b>Username</b></label>
                    <br>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <br>
                    <label for="otb"><b>OTB</b></label>
                    <br>
                    <input type="text" placeholder="OTP" name="otp"  required>
                    <br>
                    <!-- <label for="email"><b>email</b></label>
                    <br>
                    <input type="text" placeholder="Enter registered Email" name="email" required>
                    <br> -->
                    <button type="submit" value="submit">Submit</button>            
                    <br>
                    <!-- <span class="err"><a><php echo $er_uname;?> </a></span>                               -->
                    <br>
                </div>
            </form>
        </div>     
    </div>
</body>
</html>