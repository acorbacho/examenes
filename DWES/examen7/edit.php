<?php
require_once "index.php";
if (isset($_POST['accion'])) {
  $accion = $_POST['accion'];

  // Establecer la conexión
  $conn = conectar();

  if ($conn) {
    if ($accion == "añadir") {
      // Añadir un nuevo viajero
      $idViajero = $_POST['id_viajero'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $fechaNacimiento = $_POST['fecha_nacimiento'];
      $nacionalidad = $_POST['nacionalidad'];

      añadirViajero($conn, $idViajero, $nombre, $apellido, $fechaNacimiento, $nacionalidad);

      // Mostrar mensaje de éxito o error
      echo "Nuevo viajero añadido correctamente.";
    } elseif ($accion == "actualizar") {
      // Actualizar los datos de un viajero
      $idViajero = $_POST['id_viajero'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];

      actualizarViajero($conn, $idViajero, $nombre, $apellido);

      // Mostrar mensaje de éxito o error
      echo "Datos de viajero actualizados correctamente.";
    } elseif ($accion == "borrar") {
      // Borrar un registro en la tabla Viajeros
      $idViajero = $_POST['id_viajero'];

      borrarViajero($conn, $idViajero);

      // Mostrar mensaje de éxito o error
      echo "Registro de viajero borrado correctamente.";
    }

    // Cerrar la conexión con la base de datos
    $conn = null;
  } else {
    echo "Error al conectar con la base de datos.";
  }
}
