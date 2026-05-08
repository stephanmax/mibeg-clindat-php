<?php
$response = file_get_contents("https://open.er-api.com/v6/latest/EUR");

header('Content-Type: application/json; charset=utf-8');
echo $response;