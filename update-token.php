<?php

header("Content-Type:application/json");

$url = "https://xn--80adjbxl0aeb4ii6a.xn--p1ai/api/auth/update-token/";

$post_fields = array(
    "client_id" => 8,
    "client_secret" => "2f3e7d16066c1ffaabc9e190",
    "access_token" => "B9215903ED3C4493D3008C7B2F645732",
    "grant_type" => "refresh_token",
    "access_token" => "B9215903ED3C4493D3008C7B2F645732",
    "refresh_token" => "AE4B7FE32C705660E7F7FABF051B0EB2"
);

$result = http_build_query($post_fields);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $result);
curl_setopt($ch, CURLOPT_URL, $url);

$srcdata = curl_exec($ch);
$data = json_decode($srcdata, 1);

curl_close($ch);

$err = curl_error($ch);

echo $srcdata;

?>
