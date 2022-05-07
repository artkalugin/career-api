<?php

header("Content-Type:application/json");

$url = "https://xn--80adjbxl0aeb4ii6a.xn--p1ai/api/vacancy/edit/";

$post_fields = array(
    "client_id" => 8,
    "client_secret" => "2f3e7d16066c1ffaabc9e190",
    "access_token" => "8E12EE15A2CFAB0F44B236AF78B8FED8",
    "vacancy_id" => 112007,
    "title" => "Тестовая вакансия",
    "dities" => "Duties list goes here",
    "min_salary" => 10000,
    "max_salary" => 30000,
    "categories" => [67, 2513],
    "areas" => ["Екатеринбург"],
    "experience" => "no",
    "employment" => "full",
    "requirements" => "Requirements list goes here",
    "contanct_fio" => "Иванов Иван Иванович",
    "contact_phone" => "+7 (999) 123-45-67",
    "contact_email" => "example@example.com",
    "working_conditions" => "Работа над интересными задачами в молодом дружном коллективе",
    "description" => "Тестовая вакансия для проверки работы API"
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
