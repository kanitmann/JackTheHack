<?php
    $TOKEN = "abcdefghijk";
    $name = $_GET["name"];
    $ticket = $_GET["ticket"];
    $mob = $_GET["mob"];
    $token = $_GET["token"];
    #DB interface to query the token to be implemented
    // echo $_GET;
    if ($TOKEN != $token){
        echo "something went wrong";
    }
    elseif ($TOKEN == $token){
        echo "authenticated! enjoy your high speed internet connection";
    }
    else{
        echo "server error";
    }
?>