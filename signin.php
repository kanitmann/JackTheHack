<?php
    $TOKEN = "abcdefghijk";
    $name = $_GET["name"];
    $ticket = $_GET["ticket"];
    $mob = $_GET["mob"];
    $token = $_GET["token"];
    #DB interface to query the token to be implemented
    // echo $_GET;
    if ($TOKEN != $token){
        // echo "something went wrong";
        include "static/issue.html";
        // include "static/CSS/issue.css"
    }
    elseif ($TOKEN == $token){
        // echo "authenticated! enjoy your high speed internet connection";
        include "static/success.html";
    }
    else{
        // echo "server error";
        include "static/error.html";
    }
?>