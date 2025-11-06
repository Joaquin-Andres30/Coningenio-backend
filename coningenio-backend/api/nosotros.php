<?php
header("Content-Type: application/json");

$url = "https://ciisa.coningenio.cl/v1/about-us/";
$token = "ciisa";

$options = [
  "http" => [
    "method" => "GET",
    "header" => "Authorization: Bearer $token"
  ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
  http_response_code(500);
  echo json_encode(["error" => "No se pudo obtener la información de 'Nosotros'"]);
  exit;
}

echo $response;