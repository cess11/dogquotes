<?php
header("Access-Control-Allow-Origin: *");
$quotejson = file_get_contents('https://the-dune-api.herokuapp.com/quotes');
$dogejson  = file_get_contents('https://dog.ceo/api/breeds/image/random');

$res = [
    'quote' => json_decode($quotejson, true)[0]['quote'],
    'doge'  => json_decode($dogejson, true)['message']
];

echo json_encode($res);