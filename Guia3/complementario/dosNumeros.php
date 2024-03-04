<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora de Potencia</title>
</head>
<body>

<?php
    // Función para calcular la potencia de un número
    function calcularPotencia($base, $exponente) {
        // Inicializar el resultado
        $resultado = 1;

        // Calcular la potencia utilizando un bucle
        for ($i = 1; $i <= $exponente; $i++) {
            $resultado *= $base;
        }

        return $resultado;
    }

    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroBase = isset($_POST['base']) ? $_POST['base'] : '';
        $exponente = isset($_POST['exponente']) ? $_POST['exponente'] : '';

        // Validar las entradas
        if (!is_numeric($numeroBase) || !is_numeric($exponente) || $exponente != intval($exponente)) {
            echo "Por favor, ingresa un número base válido y un exponente entero.";
        } else {
            // Calcular la potencia
            $resultadoPotencia = calcularPotencia($numeroBase, $exponente);

            // Mostrar el resultado
            echo "<p>$numeroBase^$exponente = $resultadoPotencia</p>";
        }
    }
?>

<!-- Formulario para ingresar los números -->
<form id="form2"method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="base">Ingresa el número base:</label>
    <input type="text" name="base" id="base" required>

    <label for="exponente">Ingresa el exponente (entero):</label>
    <input type="text" name="exponente" id="exponente" required>

    <button type="submit" class="btn btn-primary">Calcular Potencia</button>
</form>

</body>
</html>
