<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Datos Personales</title>
</head>
<body>

<?php
    // Definir variables con los datos personales
    $nombreCompleto = "Marvin Artiga";
    $lugarNacimiento = "El salvador, Cuscatlan, Cojutepeque";
    $edad = 19;
    $carnetUniversidad = "AG230133";

    // Crear la tabla utilizando HEREDOC
    $tablaDatosPersonales = <<<HTML
        <table border="1">
            <tr>
                <th>Nombre Completo</th>
                <td>$nombreCompleto</td>
            </tr>
            <tr>
                <th>Lugar de Nacimiento</th>
                <td>$lugarNacimiento</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>$edad años</td>
            </tr>
            <tr>
                <th>Carnet de Universidad</th>
                <td>$carnetUniversidad</td>
            </tr>
        </table>
HTML;

    // Mostrar la tabla en el navegador
    echo $tablaDatosPersonales;
?>

</body>
</html>
