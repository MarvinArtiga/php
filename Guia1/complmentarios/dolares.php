<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/style.css">
    <title>Conversor de Dólares a Euros</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
    // Función para validar la entrada del usuario
    function validarCantidad($cantidad) {
        // Verificar que la cantidad sea un número positivo
        if (!is_numeric($cantidad) || $cantidad <= 0) {
            echo "Por favor, ingresa una cantidad válida en dólares.";
            return false;
        }
        return true;
    }

    // Función para convertir dólares a euros
    function convertirAEuros($cantidad) {
        // Tasa de conversión (puedes ajustarla según la tasa actual)
        $tasaConversion = 0.85;
        return $cantidad * $tasaConversion;
    }

    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidadDolares = isset($_POST['cantidad']) ? $_POST['cantidad'] : '';

        // Validar la cantidad ingresada
        if (validarCantidad($cantidadDolares)) {
            // Convertir a euros
            $cantidadEuros = convertirAEuros($cantidadDolares);

            // Mostrar la tabla de resultados
            echo "<table>";
            echo "<tr><th>Cantidad en Dólares</th><th>Cantidad en Euros</th></tr>";
            echo "<tr><td>$cantidadDolares</td><td>$cantidadEuros</td></tr>";
            echo "</table>";
        }
    }
?>

<!-- Formulario para ingresar la cantidad en dólares -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="cantidad">Ingresa la cantidad en dólares:</label>
    <input type="number" name="cantidad" id="cantidad" required>
    <button type="submit" class="btn btn-primary" >Convertir</button>
</form>

</body>
</html>
