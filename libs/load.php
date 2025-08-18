<?php

function load_template($name){
    // print("including $name.php");
    //include __DIR__."/../_templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/sasni-0420/app/_templates/$name.php";
}