<?php
// Endpoint /apis/contador
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/DWES/examen6/API/caracteres.php/api/contador') {
  // Obtener la cadena de texto de la consulta
  $cadena = isset($_GET['texto']) ? $_GET['texto'] : '';

  // Obtener el número de caracteres
  $numeroCaracteres = strlen($cadena);

  // Devolver respuesta de texto plano
  header('Content-Type: text/plain');
  echo $numeroCaracteres;
  exit;
}

// Endpoint no válido
http_response_code(404);
echo 'Endpoint no válido';
