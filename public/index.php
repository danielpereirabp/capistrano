<?php

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client();

$res = $client->get('http://httpbin.org/get');

echo $res->getStatusCode() . PHP_EOL;
// "200"

echo $res->getHeader('content-type') . PHP_EOL;
// 'application/json; charset=utf8'

echo $res->getBody() . PHP_EOL;
// {"type":"User"...
