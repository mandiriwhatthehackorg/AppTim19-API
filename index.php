<?php
header('Content-Type: application/json');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://apigateway.mandiriwhatthehack.com/rest/pub/apigateway/jwt/getJsonWebToken?app_id=c3590064-bfef-4784-b87b-7459f02f8aec");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Accept: application/json',
    'Authorization: Basic ZWNmYTI4MDMtMDQwZC00NDRjLWIyODgtOWM3ODY4MWUxMmE1OmVlMGY4YTJiLTBmNmUtNDQyMS1iNzEzLWNlNzhlODg5NjA2MA'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

print  $server_output ;

?>