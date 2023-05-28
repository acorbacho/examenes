<?php
$colores = array("red", "green", "blue", "yellow", "purple", "orange", "black", "white", "pink", "brown");
// Endpoint /api/colores
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/DWES/examen6/API/colores.php/api/colores') {
  // Generar color aleatorio
  $colorAleatorio = $colores[array_rand($colores)];

  // Crear respuesta JSON
  $response = [
    'color' => $colorAleatorio
  ];

  // Establecer encabezados de respuesta
  header('Content-Type: application/json');

  // Devolver respuesta JSON
  echo json_encode($response);
  exit;
}

// Endpoint no válido
http_response_code(404);
echo 'Endpoint no válido';
