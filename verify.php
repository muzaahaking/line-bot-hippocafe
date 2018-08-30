<?php
$access_token = '6tkhGDSGLWgO6ncIEjKWjMnjhc6xel6mE3scQTbNjuqo1nKN5rPcvYkzkqIhmbIWyfTEsoM4sHwyUAy/3koVFEC+mS8DKuhzRLeq8WKSTg4H/tCvAFL4EV/MU4ad9aIiokhZaRp7PFGWKdMRupAuMQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;