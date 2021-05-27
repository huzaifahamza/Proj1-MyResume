<?php

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST")
    {
    include 'DB_connection.php';    
    $connection = Open_Con();
    checknp($connection, $_POST['username'], $_POST['password']);
    } else {
    echo "<h1> Login Failed! </h1>";
    }
?>