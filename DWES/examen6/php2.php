<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>OpenWeather</title>
</head>

<body>
  <div class="container">
    <h1>Información del tiempo para tu ubicación</h1>

    <?php
    // Definir la clave de API y la ubicación deseada
    $api_key = file_get_contents("key.txt");
    $latitud = '42.51';
    $longitud = '-8.80';

    // Definir la URL de la API
    $url = "https://api.openweathermap.org/data/3.0/onecall?lat=$latitud&lon=$longitud&exclude=hourly,daily&appid=$api_key";

    // Hacer la solicitud a la API y obtener la respuesta
    $response = file_get_contents($url);

    // Convertir la respuesta JSON a un objeto PHP
    $data = json_decode($response);

    // Obtener la información que se desea
    $tiempo_hoy = $data->current->weather[0]->description;
    $humedad_hoy = $data->current->humidity;
    $presion_hoy = $data->current->pressure;
    $nubes_hoy = $data->current->clouds;
    $tiempo_15_julio = $data->daily[14]->weather[0]->description;
    $humedad_15_julio = $data->daily[14]->humidity;
    $presion_15_julio = $data->daily[14]->pressure;
    $nubes_15_julio = $data->daily[14]->clouds;

    // Imprimir la información obtenida en una tabla
    echo "<table>";
    echo "<tr><th></th><th>Hoy</th><th>15 de Julio del 2021</th></tr>";
    echo "<tr><td>Tiempo</td><td>$tiempo_hoy</td><td>$tiempo_15_julio</td></tr>";
    echo "<tr><td>Humedad</td><td>$humedad_hoy%</td><td>$humedad_15_julio%</td></tr>";
    echo "<tr><td>Presión atmosférica</td><td>$presion_hoy hPa</td><td>$presion_15_julio hPa</td></tr>";
    echo "<tr><td>Porcentaje de nubosidad</td><td>$nubes_hoy%</td><td>$nubes_15_julio%</td></tr>";
    echo "</table>";

    ?>

  </div>
</body>

</html>