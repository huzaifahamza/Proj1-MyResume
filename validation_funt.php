<?php
//Validation Function File 
// $error = array('name'=>'', 'email'=>'', 'mobile'=>'', 'message'=>'');
$error_name = $error_email = $error_number = $error_message = '';
$value_name = $value_email = $value_number = $value_message = '';

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
        {$GLOBALS['error_name'] = 'Name is required';
        return false;}
        else {$name = test_input($data);
            $GLOBALS['value_name'] = $name;
            if (!preg_match ("/^[a-zA-z]*$/", $name))
                {$GLOBALS['error_name'] = 'Only letters and white space allowed';
            return false; }
            }
return true;
}

// Email Validation (3 step validation)
function email_check($data)
{ 
    if (empty($data))
        {$GLOBALS['error_email'] = 'Email Address is required';
        return false;}
    else {$email = test_input($data);
          $GLOBALS['value_email'] = $data;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
           {$GLOBALS['error_email'] = 'Enter Valid Email Address';
        return false;}
            } 
return true;
        }


// Number Validation (3 step validation)
function number_check($data)
{ 
    if (empty($data))
        {$GLOBALS['error_number'] = '10 Digit Mobile is required';
        return false;}
    else {
        $GLOBALS['value_number'] = $data;
        $number = test_input($data);
        // $number = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
        // $number = str_replace("-","", $number);
        if (strlen($number) < 10 || strlen($number) > 12)
            {$GLOBALS['error_number'] = 'Enter Valid 10 or 12 Digit Mobile Number';
            return false;}
        } 
return true;
}
        
// Content Validation (3 step validation)
function content_check ($data)
{
    if (empty($data))
        {$GLOBALS['error_message'] = "Please enter your Message";
        return false;}
        // else {$GLOBALS['value_message'] = $data;
        //     $content = test_input($data); 
        //     if (!preg_match('/^[a-zA-Z]/',$content)) 
        //     {$GLOBALS['error_message'] = "Enter readable Message"; }

$GLOBALS['$value_message'] = $data;    
return true;
}
        
  
?>