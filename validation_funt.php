<?php
//Validation Function File 
// $error = array('name'=>'', 'email'=>'', 'mobile'=>'', 'message'=>'');
$error_name = $error_email = $error_number = $error_message = '';

// Validation of Valid Variable values.function test_input($data)
function test_input ($data) {
    $data = trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
    }

// Name Validation (3 step validation)
function name_check($data)
{
    if (empty($data))
        {$GLOBALS['error_name'] = 'Name is required';}
        else {$name = test_input($data);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) 
                {$GLOBALS['error_name'] = 'Only letters and white space allowed';}
            }
    $name = $data;
}

// Email Validation (3 step validation)
function email_check($data)
{ 
    if (empty($data))
        {$GLOBALS['error_email'] = 'Email Address is required';}
        else {$email = test_input($data);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {$GLOBALS['error_email'] = 'Enter Valid Email Address';}
            } 
    }

// Number Validation (3 step validation)
function number_check($data)
{ 
    if (empty($data))
        {$GLOBALS['error_number'] = '10 Digit Mobile is required';}
        else {
            $number = test_input($data);
            $number1 = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
            $number2 = str_replace("-","", $number1);
            if (strlen($number2) < 10 || strlen($number2) > 12)
                {$GLOBALS['error_number'] = 'Enter Valid Email Address';}
            } 
    }

// Content Validation (3 step validation)
function content_check ($data)
{
    if (empty($data))
        {$GLOBALS['error_message'] = "Please enter your Message";}
        else {$content = test_input($data); 
            if (!preg_match('/^a-zA-Z*/',$content)) 
            {$GLOBALS['error_message'] = "Enter readable Message"; }
             }
    } 
  
?>