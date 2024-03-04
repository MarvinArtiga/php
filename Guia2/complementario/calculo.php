<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado CUM y Unidades Valorativas</title>
</head>
<body>
    <h1>Resultado del CUM y Unidades Valorativas</h1>
    <fieldset><legend>Resultado</legend>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $materias = array();

        for ($i = 1; $i <= 5; $i++) {
            $materias["materia$i"] = $_POST["nota$i"];
        }

        $cum = calcularCUM($materias);
        $cumRedondeado = number_format($cum, 2); // Redondear a dos cifras decimales
        $unidadesValorativas = calcularUnidadesValorativas($cumRedondeado);

        echo "<p>Estudiante: $nombre</p>";
        echo "<p>CUM: $cumRedondeado</p>";
        echo "<p>Número de Unidades Valorativas para el siguiente ciclo: $unidadesValorativas</p>";
    } else {
        echo "<p>No se enviaron datos del formulario.</p>";
    }

    function calcularCUM($materias) {
        $totalUnidadesMérito = 0;
        $totalUnidadesValorativas = 0;

        foreach ($materias as $materia => $nota) {
            if (is_numeric($nota)) {
                $totalUnidadesMérito += $nota * obtenerUnidadesValorativas($materia);
                $totalUnidadesValorativas += obtenerUnidadesValorativas($materia);
            } else {
                echo "¡La nota ingresada para la materia $materia no es un número válido!";
            }
        }

        if ($totalUnidadesValorativas != 0) {
            return $totalUnidadesMérito / $totalUnidadesValorativas;
        } else {
            return 0;
        }
    }

    function calcularUnidadesValorativas($cum) {
        if ($cum >= 7.5) {
            return 32;
        } elseif ($cum >= 7.0 && $cum < 7.5) {
            return 24;
        } elseif ($cum >= 6.0 && $cum < 7.0) {
            return 20;
        } else {
            return 16;
        }
    }

    function obtenerUnidadesValorativas($materia) {
        // Función simulada para obtener las Unidades Valorativas según la materia
        $unidadesValorativas = array(
            "materia1" => 3,
            "materia2" => 4,
            "materia3" => 3,
            "materia4" => 5,
            "materia5" => 2
        );

        return isset($unidadesValorativas[$materia]) ? $unidadesValorativas[$materia] : 0;
    }
    ?></fieldset>
</body>
</html>
