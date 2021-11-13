<?php

require_once __DIR__."/vendor/autoload.php";

$client = new \GuzzleHttp\Client();
$response = $client->get("http://google.com");
echo $response->getBody()->getContents();
//var_dump();
