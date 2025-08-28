<?php

function load_template($name){
   // print("including $name.php");
    //include __DIR__."/../_templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/marstech/app/_templates/$name.php";
}

//2
function validate_credentials($username, $password){
    if($username == "ramseen@marstech.lk" and $password == "password"){
        return true;
    }else{
        return false;
    }
}

// --- 3 --

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

function signup($Username, $Password, $email, $phone){
   
   
$servername = "localhost";
$username = "root";
$password = "midi@123";
$dbname = "marstech_newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO `auth` (`id`, `username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '1');";

$result = false;

if ($conn->query($sql) === TRUE) {
     $result = true;  

} else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $result = false;
}

$conn->close();
return $result;





}

?>