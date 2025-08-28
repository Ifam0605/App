<?php

function load_template($name){
    // print("including $name.php");
    //include __DIR__."/../_templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/ifam-0084/App/_templates/$name.php";
}

 function validate_credentials($username, $password){

    if($username == "ifam@gmail.com" && $password == "ifam1234"){
        return true;
    }
    else{
        return false;
    }

    
 }


?>