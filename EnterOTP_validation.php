<?php

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    {
    include 'DB_connection.php';    
    $connection = Open_Con();
    $user = $_POST['username']; 
    $otp = $_POST['otp'];
    checkuserotp ($connection, $user, $otp);
}   


