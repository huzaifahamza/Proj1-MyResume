<?php 
session_start() 
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Message Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>
<body style="background-color: lightgrey;">
    <h2 style="text-align: center;">Welcome to Message Page</h2>
    <h1> Logged In! </h1>
    <span class="Logout"> <a href="Resume_login.php"> Logout </a> </span>
    

<?php
session_unset();
session_destroy();
?>    
</body>
</html>
