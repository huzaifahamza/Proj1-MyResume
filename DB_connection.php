<?php
$bdhost = 'localhost';
$bduser = 'hozy';
$dbpass = 'test1';
$db ='myresumedb';


function Open_Con() {
    GLOBAL $bdhost, $bduser, $dbpass, $db, $conn;
    $conn = new mysqli ($bdhost, $bduser, $dbpass, $db);
    // $conn = new mysqli ($db_array['bdhost'], $db_array['bduser'], $db_array['dbpass'], $db_array['db']);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
return $conn;
}

function db_insert($conn, $name,$mobile,$email,$message) {
        $sql = "INSERT INTO cont_page (s_name,mobile,email,s_content)
            VALUES ('$name','$mobile','$email','$message')";
        if ($conn->query($sql) == TRUE) {
            $GLOBALS['err_msg'] = "Message added successful";}
        else {$GLOBALS['err_msg'] = "Message not added";}
}    

function ppinsert ($conn, $user, $newpwd) {
    $sql = "UPDATE signin SET password='.$newpwd.' WHERE username='.$user.';";
    if ($conn -> query($sql) == TRUE) {
        return true;
        // $GLOBALS['err_msg'] = "Message added successful";
        } else { return false;
        // $GLOBALS['err_msg'] = "Message not added";
    }
}


function insertotb($conn, $user, $otp) {
    $pwd = md5($otp);
    $sql = "UPDATE signin SET resetkey='$pwd' WHERE username='$user' ;";
    if ($conn -> query($sql) == TRUE) {
        echo "OTB added successful";}
        // $GLOBALS['err_msg'] = "Message added successful";}
    else { echo "OTB not added";
        // $GLOBALS['err_msg'] = "Message not added";
    }    
}

function checkotp($conn, $otp, $user) {
    GLOBAL $er_uname, $err_msg;
    $sql = "SELECT username, resetkey FROM signin WHERE username='$user';";
        // print_r($sql); echo '<br>';
    if($result = $conn->query($sql)){
            // print_r($result); echo '<br>';
        $rows = $result->fetch_row();
            // print_r($rows); echo '<br>';
        $hash_pwd = md5($otp);
            // print_r($hash_password); echo '<br>';
        if($hash_pwd == $rows[1]) {
            echo "OTP Accepted!";
            // $_SESSION['user'] = $_POST['username'];
            db_close($conn);
            header("Location: http://localhost/phiedu/Rest_password");
        } else {
            echo 'Invalid OTP!';    
            return false;
            }
        }
} 

function checkuserotp($conn, $user, $otp){
    
    $sql = "SELECT username, resetkey FROM signin WHERE username ='".$user."'";
    // print_r($sql); echo '<br>';
    
    if ($results = $conn->query($sql)) {
    print_r($results); echo '<br>';
    $rows = $results->fetch_row();
    print_r($rows); echo '<br>';
    $hash_pwd = md5($otp);
        if ($hash_pwd == $rows[1])
            {echo "<h1>OTB Matched!</h1>"; 
                header("Location: http://localhost/phiedu/EnterRest_password");} 
        else {echo "<h1>Invalid OTP!</h1>";}
    }
}

function checknp($conn, $username, $password) {
    GLOBAL $er_uname, $err_msg;
    $sql = "SELECT password, salt, hash_algorithm from signin where username ='".$username."';";
        // print_r($sql); echo '<br>';
    if($result = $conn->query($sql)){
            // print_r($result); echo '<br>';
        $rows = $result->fetch_row();
            // print_r($rows); echo '<br>';
        $hash_password = md5($password."_".$rows[1]);
            // print_r($hash_password); echo '<br>';
        if($hash_password == $rows[0]) {
            echo "Password Check Done!";
            $_SESSION['user'] = $_POST['username'];
            db_close($conn);
            header("Location: http://localhost/phiedu/Message_Page.php");
        } else {
                return false;
            }
        }
} 

function db_close($conn) {
    GLOBAL $conn;
    $conn -> close();
}

?>