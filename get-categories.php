<?php

header("Content-Type:application/json");

$url = "https://xn--80adjbxl0aeb4ii6a.xn--p1ai/api/create-vacancy/";

$post_fields = array(
);

$result = http_build_query($post_fields);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $result);
curl_setopt($ch, CURLOPT_URL, $url);

$srcdata = curl_exec($ch);
$data = json_decode($srcdata, 1);

curl_close($ch);

$err = curl_error($ch);

echo $srcdata;

?>
