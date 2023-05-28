<?php
// Endpoint /apis/construir-nombre
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/DWES/examen6/API/nombre_apellidos.php/apis/construir-nombre') {
  // Obtener el cuerpo de la solicitud como JSON
  $json = file_get_contents('php://input');

  // Decodificar el JSON en un arreglo asociativo
  $data = json_decode($json, true);

  // Verificar si se recibió el JSON correctamente
  if (is_array($data) && isset($data['nombre']) && isset($data['apellidos'])) {
    // Obtener el nombre y apellidos del arreglo
    $nombre = $data['nombre'];
    $apellidos = $data['apellidos'];

    // Construir el nombre completo
    $nombreCompleto = $nombre . ' ' . $apellidos;

    // Devolver el nombre completo como texto en crudo
    header('Content-Type: text/plain');
    echo $nombreCompleto;
    exit;
  } else {
    // El JSON recibido no es válido
    http_response_code(400);
    echo 'JSON no válido';
    exit;
  }
}

// Endpoint no válido
http_response_code(404);
echo 'Endpoint no válido';
