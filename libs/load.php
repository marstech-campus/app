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

?>


 