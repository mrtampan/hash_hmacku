<?php

function verifyHash($data, $code){
    $key = file_get_contents('key.txt');
    $result = hash_hmac('sha256', $data , $key);

    if($result == $code){
        return "true";
    }

    return "false";
    
}

echo verifyHash($_GET['data'], $_GET['code']);
