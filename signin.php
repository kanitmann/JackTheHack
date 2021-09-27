<?php
    $TOKEN = "abcdefghi"
    $name = $_GET["name"];
    $ticket = $_GET["ticket"];
    $mob = $_GET["mob"]
    $token = $_GET["token"]
    #DB interface to query the token to be implemented
    if ($TOKEN != $token){
        echo "something went wrong"
    }
    if ($TOKEN == $token){
        echo "authenticated! enjoy your high speed internet connection"
    }
?>