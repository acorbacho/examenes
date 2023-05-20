<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Archivo PHP</title>
</head>

<body>
    <?php
    $filename = "ejemplo.txt";
    $path = "./" . $filename;

    // Tarea 1
    echo "<p>Nombre del archivo: " . $filename . "</p>";
    echo "<p>Ruta del archivo: " . $path . "</p><br>";

    // Tarea 2
    if (file_exists($path)) {
        echo "<p>El archivo existe</p><br>";
    } else {
        echo "<p>El archivo no existe</p><br>";
    }

    // Tarea 3
    $file_content = file_get_contents($path);
    echo "<p>Contenido del archivo:</p>";
    echo "<p>" . nl2br($file_content) . "</p><br>";

    // Tarea 4
    $array = ["manzana", "pera", "naranja", "plátano"];
    $file_content = implode("\n", $array);
    file_put_contents($path, $file_content);
    echo "<p>Contenido del archivo actualizado:</p>";
    echo "<p>" . nl2br(file_get_contents($path)) . "</p><br>";

    // Tarea 5
    $csv_path = "./ejemplo.csv";
    if (file_exists($csv_path)) {
        $csv_file = fopen($csv_path, "r");
        $csv_line = fgets($csv_file);
        fclose($csv_file);
        $csv_array = explode(",", $csv_line);
        echo "<p>Primera línea del archivo CSV:</p>";
        echo "<p>";
        print_r($csv_array);
        echo "</p>";
    } else {
        echo "<p>El archivo CSV no existe</p>";
    }
    ?>
</body>

</html>