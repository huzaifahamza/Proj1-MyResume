<!-- // Connecting with the Databases 
$dbhost = host where the server is running
$dbuser = will be the usernmae 
$dbname = name of the databases
// Check Connection mysqli
if (mysqli_connect_error()){die ("database connection failed:".mysqli_connect_error());}

ONE CREATE CONNECTION ; EXECUTE OTHER FUNCTION (INSERT, ETC) ; CLOSING
create a config.php and use global variable -->

<?php
$bdhost = 'localhost';
$bduser = 'hozy';
$dbpass = 'test1';
$db ='myresumedb';


function Open_Con() {
    GLOBAL $bdhost, $bduser, $dbpass, $db;
    $GLOBALS['$conn'] = new mysqli ($bdhost, $bduser, $dbpass, $db);
    // $conn = new mysqli ($db_array['bdhost'], $db_array['bduser'], $db_array['dbpass'], $db_array['db']);

    // Check connection
    if ($GLOBALS['$conn']->connect_error) {
    die("Connection failed: " . $GLOBALS['$conn']->connect_error);
    }
}

function db_insert($name,$mobile,$email,$message) {
        $sql = "INSERT INTO cont_page (s_name,mobile,email,s_content)
            VALUES ('$name','$mobile','$email','$message')";
    
            // echo $sql;
        if ($GLOBALS['$conn']->query($sql) == TRUE) {
            $GLOBALS['err_msg'] = "Message added successful";}
            else {
            $GLOBALS['err_msg'] = "Message not added";
            }
        }    


function db_close() {
    // echo "all commands executed";
    $GLOBALS['$conn'] -> close();
    header('location: contactme.php');
    
}
   // }
        
// header('location: contactme.php');
// $GLOBALS['err_msg'] = "Error: " . $sql . "<br>" . $conn->error;
                

?>