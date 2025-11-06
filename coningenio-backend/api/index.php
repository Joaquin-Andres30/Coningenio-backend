<?php
header("Content-Type: application/json");

$uri = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];

// Normaliza la ruta
$path = parse_url($uri, PHP_URL_PATH);
$path = str_replace("/coningenio-backend/api/index.php", "", $path);
$path = trim($path, "/");

// Ruteo simple
switch ($path) {
  case "servicios":
    require "servicios.php";
    break;

  case "nosotros":
    require "nosotros.php";
    break;

  case "contacto":
    if ($method === "POST") {
      require "contacto.php";
    } else {
      http_response_code(405);
      echo json_encode(["error" => "Método no permitido"]);
    }
    break;

  default:
    http_response_code(404);
    echo json_encode(["error" => "Ruta no encontrada"]);
    break;
}