<?php

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com'); 
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
//curl_setopt($ch, CURLOPT_PROXY, 'fakeproxy.com:1080'); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'user:password'); 
$data = curl_exec(); 
curl_close($ch);

echo($data);