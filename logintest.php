<?php 
//include './libs/load.php';
include 'libs/load.php';

$user = "root";
$pass = "123";
$result = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session Destroyed, <a href='logintest.php'> Login Again </a> ");
}

if(Session::get('is_loggedin')){
    $userdata = Session::get('session_user');
    print("Wlecome Back, $userdata[username]");   /////////////////////////changed //////////////
    $result = $userdata;

}else {
    print("No Session Found, trying to login now.\n");
    $result = User::login($user, $pass);
    //print_r($result);                          /////////////////////////changed //////////////

    if ($result) {
    echo "Login successful!, $result[username] \n";    /////////////////////////changed //////////////
    Session::set('is_loggedin',true);
    Session::set('session_user', $result);
   
} else {
    echo "Login failed.";

}
}

echo <<< EOL
<br><br><a href="logintest.php?logout">Logout </a>
EOL




?>
