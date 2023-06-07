<!DOCTYPE html>
<html lang='es-ES'>

<head>
  <meta charset='UTF-8' />
  <title>Viajes | Visualización</title>
</head>

<body>
  <button><a href="mod.html">Página de edición</a></button>
  <?php
  // Establecer la conexión con la base de datos
  function conectar() {
    $servername = "192.168.1.20";
    $username = "user";
    $password = "password1234";
    $dbname = "viajes";
    $port = "33060";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Error de conexión: " . $e->getMessage();
      return null;
    }
  }

  // Mostrar todos los viajeros registrados
  function mostrarViajeros($conn) {
    $query = "SELECT * FROM Viajeros";
    $stmt = $conn->query($query);
    $viajeros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Viajeros registrados:</h2>";
    foreach ($viajeros as $viajero) {
      echo "ID: " . $viajero['id_viajero'] . "<br>";
      echo "Nombre: " . $viajero['nombre'] . "<br>";
      echo "Apellido: " . $viajero['apellido'] . "<br>";
      echo "Fecha de nacimiento: " . $viajero['fecha_nacimiento'] . "<br>";
      echo "Nacionalidad: " . $viajero['nacionalidad'] . "<br><br>";
    }
  }

  // Mostrar todos los viajes registrados
  function mostrarViajes($conn) {
    $query = "SELECT * FROM Vuelos";
    $stmt = $conn->query($query);
    $vuelos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Viajes registrados:</h2>";
    foreach ($vuelos as $vuelo) {
      echo "ID: " . $vuelo['id_vuelo'] . "<br>";
      echo "ID Viajero: " . $vuelo['id_viajero'] . "<br>";
      echo "Ciudad de origen: " . $vuelo['ciudad_origen'] . "<br>";
      echo "Ciudad de destino: " . $vuelo['ciudad_destino'] . "<br>";
      echo "Fecha de salida: " . $vuelo['fecha_salida'] . "<br>";
      echo "Fecha de llegada: " . $vuelo['fecha_llegada'] . "<br><br>";
    }
  }

  // Contar la cantidad de viajeros registrados
  function contarViajeros($conn) {
    $query = "SELECT COUNT(*) as total FROM Viajeros";
    $stmt = $conn->query($query);
    $viajerosCount = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalViajeros = $viajerosCount['total'];

    echo "<h2>Total de viajeros registrados: " . $totalViajeros . "</h2>";
  }

  // Contar la cantidad de viajes registrados
  function contarViajes($conn) {
    $query = "SELECT COUNT(*) as total FROM Vuelos";
    $stmt = $conn->query($query);
    $vuelosCount = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalVuelos = $vuelosCount['total'];

    echo "<h2>Total de viajes registrados: " . $totalVuelos . "</h2>";
  }

  // Obtener el viajero de menor edad
  function obtenerViajeroMenorEdad($conn) {
    $query = "SELECT * FROM Viajeros ORDER BY fecha_nacimiento ASC LIMIT 1";
    $stmt = $conn->query($query);
    $viajeroMenorEdad = $stmt->fetch(PDO::FETCH_ASSOC);

    return $viajeroMenorEdad;
  }

  // Mostrar la información del viajero de menor edad
  function mostrarViajeroMenorEdad($viajeroMenorEdad) {
    echo "<h2>Viajero de menor edad:</h2>";
    echo "ID: " . $viajeroMenorEdad['id_viajero'] . "<br>";
    echo "Nombre: " . $viajeroMenorEdad['nombre'] . "<br>";
    echo "Apellido: " . $viajeroMenorEdad['apellido'] . "<br>";
    echo "Fecha de nacimiento: " . $viajeroMenorEdad['fecha_nacimiento'] . "<br>";
  }

  // Contar la cantidad de viajes según el origen de datos
  function contarViajesPorOrigen($conn) {
    $query = "SELECT ciudad_origen, COUNT(*) as total FROM Vuelos GROUP BY ciudad_origen";
    $stmt = $conn->query($query);
    $viajesPorOrigen = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Viajes según el origen:</h2>";
    foreach ($viajesPorOrigen as $viajeOrigen) {
      echo "Ciudad de origen: " . $viajeOrigen['ciudad_origen'] . "<br>";
      echo "Total de viajes: " . $viajeOrigen['total'] . "<br><br>";
    }
  }

  // Añadir un nuevo viajero
  function añadirViajero($conn, $idViajero, $nombre, $apellido, $fechaNacimiento, $nacionalidad) {
    $query = "INSERT INTO Viajeros (id_viajero, nombre, apellido, fecha_nacimiento, nacionalidad)
              VALUES (:id_viajero, :nombre, :apellido, :fecha_nacimiento, :nacionalidad)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_viajero', $idViajero);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':fecha_nacimiento', $fechaNacimiento);
    $stmt->bindParam(':nacionalidad', $nacionalidad);

    $stmt->execute();
  }

  // Actualizar los datos de un viajero
  function actualizarViajero($conn, $idViajero, $nombre, $apellido) {
    $query = "UPDATE Viajeros SET nombre = :nombre, apellido = :apellido WHERE id_viajero = :id_viajero";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':id_viajero', $idViajero);

    $stmt->execute();
  }

  // Borrar un registro en la tabla Viajeros
  function borrarViajero($conn, $idViajero) {
    // Eliminar los vuelos asociados al viajero
    $query = "DELETE FROM Vuelos WHERE id_viajero = :id_viajero";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_viajero', $idViajero);
    $stmt->execute();

    // Eliminar el viajero
    $query = "DELETE FROM Viajeros WHERE id_viajero = :id_viajero";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_viajero', $idViajero);
    $stmt->execute();
  }

  // Uso de las funciones

  // Establecer la conexión
  $conn = conectar();

  if ($conn) {
    // Mostrar todos los viajeros registrados
    mostrarViajeros($conn);

    // Mostrar todos los viajes registrados
    mostrarViajes($conn);

    // Contar la cantidad de viajeros registrados
    contarViajeros($conn);

    // Contar la cantidad de viajes registrados
    contarViajes($conn);

    // Obtener el viajero de menor edad
    $viajeroMenorEdad = obtenerViajeroMenorEdad($conn);

    // Mostrar la información del viajero de menor edad
    mostrarViajeroMenorEdad($viajeroMenorEdad);

    // Contar la cantidad de viajes según el origen de datos
    contarViajesPorOrigen($conn);

    // Cerrar la conexión con la base de datos
    $conn = null;
  } else {
    echo "Error al conectar con la base de datos.";
  }
  ?>
</body>

</html>