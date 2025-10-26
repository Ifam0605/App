<?php
include 'libs/load.php';
$username = "root";
$password = "123";

$result = User::login($username,$password);

if($result){
    echo("login succesful");
}
else{
    echo("login failed");
}

?>