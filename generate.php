<?php

function generateHash($data){
    $key = file_get_contents('key.txt');
    return hash_hmac('sha256', $data , $key);
}

echo generateHash($_GET['data']);
