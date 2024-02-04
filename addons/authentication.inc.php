<?php

//get all header
$headers = getallheaders();

// if authorization is not in the header
if(!array_key_exists('Authorization',$headers)){
    server_error(404);
}

$authorization_data =  $headers['Authorization'];

if($authorization_data !== 'JePhThAh'){
    server_error(404);
}