<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../config/database.php';
    include_once '../class/employees.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon");
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
$result = curl_exec($ch);



print_r($result);
curl_close($ch);

?>