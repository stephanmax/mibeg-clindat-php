<?php

$currency = filter_input(INPUT_GET, "currency") ?? "EUR";

$response = file_get_contents("https://open.er-api.com/v6/latest/$currency");

header('Content-Type: application/json; charset=utf-8');
echo $response;