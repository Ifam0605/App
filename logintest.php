<?php
include 'libs/load.php';
$user = "root";
$pass = "123";
$result = null;


if(isset($_GET['logout'])){
   
    Session::destroy();
    die("destroyed session,<br> <br><a href='logintest.php'>Login Again</a>");
}

if (Session::get("is_loggedin")) {
    $userdata = Session::get("session_user");
    // print_r($userdata);
    print("Welcome back, $userdata[username]<br>");
    $result = $userdata;
    
} else {
    print("No session found, trying to login now.<br>");
    $result = User::login($user, $pass);
    //print_r($result);

    if ($result) {
        echo ("<br>Login successful, $result[username]<br>");
        Session::set('is_loggedin', true);
        Session::set('session_user', $result);
    } else {
        echo ("Login failed");
    }
}

echo <<< EOL

<br><br>
<a href="logintest.php?logout=true">Log out</a>
EOL ;