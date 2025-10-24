<?php 
//include './libs/load.php';
include 'libs/load.php';

$user = "root";
$pass = "12345";
$test = User::login($user, $pass);

if ($test) {
    echo "Login successful!";
} else {
    echo "Login failed.";
}

?>