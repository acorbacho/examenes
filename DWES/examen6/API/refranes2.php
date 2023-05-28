<?php
$refranes = array("A caballo regalado no le mires el diente", "No dejes para mañana lo que puedas hacer hoy", "En casa del herrero, cuchillo de palo", "Ojos que no ven, corazón que no siente", "Más vale prevenir que curar", "No hay mal que por bien no venga", "A quien madruga, Dios le ayuda", "Más vale pájaro en mano que ciento volando", "Cría cuervos y te sacarán los ojos", "El hábito no hace al monje");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/DWES/examen6/API/refranes.php/api/refranes-json') {
  // Obtener tres refranes aleatorios
  $refranesAleatorios = array_rand($refranes, 3);
  $primerRefran = $refranes[$refranesAleatorios[0]];
  $segundoRefran = $refranes[$refranesAleatorios[1]];
  $tercerRefran = $refranes[$refranesAleatorios[2]];

  // Crear respuesta JSON
  $response = [
    'primero' => $primerRefran,
    'seguro' => $segundoRefran,
    'tercero' => $tercerRefran
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
