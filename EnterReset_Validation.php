<!-- Password Validation -->
<?php

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user = $_POST['username'];
        $pwd = $_POST['newpwd'];
        $repwd = $_POST['repwd'];
        // matchpassword ($_POST['newpwd'], $_POST['repwd']);
        
        if ($_POST['newpwd'] == $_POST['repwd']) {
            test_input ($pwd);
            include 'DB_connection.php';    
            $conn = Open_Con();
            ppinsert ($conn, $user, $pwd);
            db_close($conn);
            echo $error =  "Password Updated!";
        } else {
        echo $error = "Password Update Failed";
    }
}

function matchpassword ($data, $Rdata) {
    if ($data != $Rdata) 
    {$error = "Password Not Matched";
    return false;
    } else {return true;}
}

function test_input ($data) {
    $data = trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
}

?>