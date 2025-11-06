<?php
header("Content-Type: application/json");

// Verifica que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  http_response_code(405);
  echo json_encode(["error" => "Método no permitido"]);
  exit;
}

// Captura los datos enviados desde el formulario
$nombre = $_POST["nombre"] ?? null;
$correo = $_POST["correo"] ?? null;
$mensaje = $_POST["mensaje"] ?? null;

// Valida que los campos no estén vacíos
if (!$nombre || !$correo || !$mensaje) {
  http_response_code(400);
  echo json_encode(["error" => "Todos los campos son obligatorios"]);
  exit;
}

// Simula procesamiento (por ejemplo, enviar correo o guardar en BD)
$response = [
  "success" => true,
  "mensaje" => "Gracias, $nombre. Hemos recibido tu mensaje correctamente."
];

// Devuelve la respuesta al frontend
echo json_encode($response);