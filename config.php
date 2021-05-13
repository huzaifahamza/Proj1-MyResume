<?php
// Config file for calling Function

include 'validation_funt.php';
include 'DB_connection.php';

$name = $email = $mobile = $message = "";
$dname = $demail = $dmobile = $dmessage = "";

// On submitting form below function will execute.
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    { 
    $name = name_check($_POST['name']);
    email_check($_POST['email']);
    number_check($_POST['mobile']);
    content_check($_POST['message']);

    // if ($check_name = $check_email = $check_mobile = $check_message == '1'){
    if (is_null($error_name) == true && is_null($error_email) == true && is_null($error_number) == true && is_null($error_message) == true){
        Open_Con();
        } 
        else {
        echo "error found";}
    }    
?>