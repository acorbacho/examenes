<?php
include("vehiculos.php"); // Incluimos el archivo con la clase Vehiculo

// Creamos dos objetos de la clase Vehiculo
$v1 = new Vehiculo("1234ABC", 5);
$v2 = new Vehiculo("5678DEF", 2);

// Mostramos la información de v1 y v2
echo "<p>" . $v1->ver() . "</p>";
echo "<p>" . $v2->ver_completo() . "</p>";

// Actualizamos la matrícula de v2
$v2->actualizar_matricula("9012GHI");

// Mostramos la nueva matrícula de v2
echo "<p>La nueva matrícula de v2 es: " . $v2->matr . "</p>";
