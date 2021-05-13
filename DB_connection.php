<!-- // Connecting with the Databases 
$dbhost = host where the server is running
$dbuser = will be the usernmae 
$dbname = name of the databases
// Check Connection mysqli
if (mysqli_connect_error()){die ("database connection failed:".mysqli_connect_error());}

ONE CREATE CONNECTION ; EXECUTE OTHER FUNCTION (INSERT, ETC) ; CLOSING
create a config.php and use global variable -->

<?php

$db_array = array ('bdhost'=>'localhost', 'bduser'=>'hozy', 'dbpass'=>'test1', 'db'=>'myresumedb');

function Open_Con() {

$conn = new mysqli ($db_array['bdhost'], $db_array['bduser'], $db_array['dbpass'], $db_array['db']);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
    $sql = "INSERT INTO cont_page (name,mobile,email,message)
                VALUES ($dname,$dmobile,$demail,$dmessage)";
    if ($conn->query($sql) === TRUE) {
    $GLOBALS['suc_msg'] = "Message added successful";}
    else {
        $GLOBALS['err_msg'] = "Error: " . $sql . "<br>" . $conn->error;
    }
    
$conn -> close();
        // echo "all commands executed";
// header('location: contactme.php');
}                

?>