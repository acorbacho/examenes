<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Chuck Norris Jokes API</title>
</head>

<body>
    <h1>Chistes de Chuck Norris</h1>

    <?php
    // Función para realizar una solicitud a la API y obtener los datos en formato JSON
    function obtenerDatosDeAPI($url) {
        $datosJSON = file_get_contents($url);
        return json_decode($datosJSON, true);
    }

    // Obtener un chiste aleatorio
    $chisteAleatorio = obtenerDatosDeAPI('https://api.chucknorris.io/jokes/random');
    $chiste = $chisteAleatorio['value'];
    $fechaActualizacion = $chisteAleatorio['updated_at'];
    $categoria = $chisteAleatorio['categories'][0] ?? 'Sin categoría';

    echo "<h2>Chiste aleatorio</h2>";
    echo "<p>$chiste</p>";
    echo "<p>Fecha de actualización: $fechaActualizacion</p>";
    echo "<p>Categoría: $categoria</p>";

    // Obtener la lista de categorías disponibles
    $categorias = obtenerDatosDeAPI('https://api.chucknorris.io/jokes/categories');

    echo "<h2>Categorías disponibles</h2>";
    echo "<ul>";
    foreach ($categorias as $categoria) {
        $urlCategoria = "https://api.chucknorris.io/jokes/random?category=$categoria";
        echo "<li><a href=\"$urlCategoria\">$categoria</a></li>";
    }
    echo "</ul>";

    // Obtener un chiste aleatorio basado en una búsqueda de texto
    $busqueda = 'spain'; // Texto de búsqueda
    $chisteBusqueda = obtenerDatosDeAPI("https://api.chucknorris.io/jokes/random?query=$busqueda");
    $chiste = $chisteBusqueda['value'];
    echo "<h2>Chiste aleatorio basado en '$busqueda'</h2>";
    echo "<p>$chiste</p>";
    ?>

</body>

</html>