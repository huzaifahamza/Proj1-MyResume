<?php
include 'resume_config.php';
$uname = $psw = $vusern = $er_uname ='';
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>
<body style="background-color: lightgrey;">
    <div class="greenframe">
        <br><br><br><br>
    <h2 style="text-align: center;">Admin Login</h2>
        <div class="whiteframe">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                <div class="lcontainer">
                    <label for="username"><b>Username</b></label>
                    <br>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <br>
                    <label for="password"><b>Password</b></label>
                    <br>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <br>
                    <span class="password"><a href="Forgot_password.php"> Forgot password?</a></span>
                    <button type="submit" value="submit">Login</button>            
                    <br>
                    <span class="err"><a><?php echo $er_uname;?> </a></span>                              
                    <br>
                </div>
            </form>
        </div>     
    </div>
</body>
</html>