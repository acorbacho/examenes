<?php
// Endpoint /apis/imc
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/DWES/examen6/API/imc.php/apis/imc') {
  // Obtener los datos del formulario
  $peso = isset($_POST['peso']) ? $_POST['peso'] : 0;
  $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;

  // Calcular el IMC
  $imc = $peso / ($altura * $altura);

  // Devolver respuesta de texto plano
  header('Content-Type: text/plain');
  echo $imc;
  exit;
}

// Endpoint no válido
http_response_code(404);
echo 'Endpoint no válido';
