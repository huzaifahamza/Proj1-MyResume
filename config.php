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
    
    if (name_check($_POST['name'])==true && email_check($_POST['email'])== true && number_check($_POST['mobile'])==true && content_check($_POST['message'])== true) {
    Open_Con();
    db_insert($_POST['name'],$_POST['mobile'],$_POST['email'],$_POST['message']);
    db_close();
    $GLOBALS['er_msg'] = "Database Connection successefull";}
        else {
        $GLOBALS['er_msg'] = "Database Connection Error";
        exit();
    }  
}
?>