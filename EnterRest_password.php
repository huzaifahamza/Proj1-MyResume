<?php
include 'EnterReset_Validation.php';
$error ='';
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/forgotpp.css">
</head>
<body style="background-color: lightgrey;">
    <div class="greenframe">
        <br><br><br><br>
    <h2 style="text-align: center;">Enter New Password</h2>
        <div class="whiteframe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                <div class="lcontainer">
                <label for="username"><b>Username</b></label>
                    <br>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <br>
                    <label for="newpwd"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Enter Password" name="newpwd" required>
                    <br>
                    <label for="repwd"><b>Re-Enter Password</b></label>
                    <br>
                    <input type="password" placeholder="Re-Enter Password" name="repwd" required>
                    <br>
                    <button type="submit" value="submit">Submit</button>            
                    <br>
                    <span class="err"><a><?php echo $error;?> </a></span>                              
                    <br>
                </div>
            </form>
        </div>     
    </div>
</body>
</html>