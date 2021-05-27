<?php
// Config file for calling Function

include 'validation_funt.php';
include 'DB_connection.php';


$dname = $demail = $dmobile = $dmessage = "";

// On submitting form below function will execute.
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    { 
    name_check($_POST['name']);
    email_check($_POST['email']);
    number_check($_POST['mobile']);
    content_check($_POST['message']);
    
    if (name_check($_POST['name'])==false && email_check($_POST['email'])== false && number_check($_POST['mobile'])==false && content_check($_POST['message'])== false) {
        exit();
        $GLOBALS['er_msg'] = "Validation Failed"; }
    else if (name_check($_POST['name'])==true && email_check($_POST['email'])== true && number_check($_POST['mobile'])==true && content_check($_POST['message'])== true) {
    $conn = Open_Con();
    db_insert($conn, $_POST['name'],$_POST['mobile'],$_POST['email'],$_POST['message']);
    db_close($conn);
    header('Location: http://localhost/phiedu/contactme.php');
    $GLOBALS['er_msg'] = "Database Connection Error"; }
        // else {
        // $GLOBALS['er_msg'] = "Database Connection Error";
        // exit();
    }  
?>