<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Promedio de Notas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
    // Definir la matriz de notas
    $notas = array(
        "Estudiante1" => array(
            "Parcial" => 9.1,
            "Investigación" => 8.5,
            "Tarea" => 4.8
        ),
        // Agrega más estudiantes y sus respectivas notas aquí
    );

    // Calcular el promedio para cada estudiante
    foreach ($notas as $estudiante => $actividades) {
        // Ponderaciones de las actividades
        $ponderacionParcial = 0.2;
        $ponderacionInvestigacion = 0.3;
        $ponderacionTarea = 0.5;

        // Calcular el promedio ponderado
        $promedio = ($actividades['Parcial'] * $ponderacionParcial) +
                    ($actividades['Investigación'] * $ponderacionInvestigacion) +
                    ($actividades['Tarea'] * $ponderacionTarea);

        // Almacenar el promedio en la matriz
        $notas[$estudiante]['Promedio'] = $promedio;
    }

    // Mostrar la tabla con los resultados
    echo "<table>";
    echo "<tr><th>Estudiante</th><th>Parcial</th><th>Investigación</th><th>Tarea</th><th>Promedio</th></tr>";

    foreach ($notas as $estudiante => $actividades) {
        echo "<tr>";
        echo "<td>$estudiante</td>";
        echo "<td>{$actividades['Parcial']}</td>";
        echo "<td>{$actividades['Investigación']}</td>";
        echo "<td>{$actividades['Tarea']}</td>";
        echo "<td>{$actividades['Promedio']}</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>
