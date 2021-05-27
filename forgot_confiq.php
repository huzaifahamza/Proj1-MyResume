<?php

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    {
    include 'DB_connection.php';    
    $connection = Open_Con();
    $user = $_POST['username'];
    if(isset($_POST["username"]) && (!empty($_POST["username"]))){
        // $email = $_POST["email"];
        // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$user) {
            echo "<p>Invalid Input please enter Valid Input!</p>";
            } else {
            $sel_query = "SELECT * FROM `signin` WHERE username='".$user."'";
            // print_r($sel_query); echo '<br>';
            $results = mysqli_query($conn,$sel_query);
            // print_r($results); echo '<br>';
            $row = mysqli_num_rows($results);
            // print_r($row); echo '<br>';
            if ($row=="")
              {echo "<h1>No user is registered with this email address!</h1>";} 
            else {echo "<h1>OTB send at your email address enter the same on the next page!</h1>"; 
                $opt = GenerateOTB();
                print_r($opt); 
                echo '<br>';
                insertotb($connection, $user, $opt);
                echo '<br>';
                echo '<span class="otp"><a href="EnterOTP.php"> Click here for OTP Page </a></span>';
                // exit();
            }
            }   
        }
    }

function GenerateOTB() 
{
    // we will generate random string of 6 digit
    $str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    // using inbuild funct $substr & $str_shuffle  // lenght as 6
    $otp = substr(str_shuffle($str), 0, 6);
     return $otp;
}

function generateexpdate()
{
    // DATETIME values in 'YYYY-MM-DD hh: mm: ss' format.

}

?>