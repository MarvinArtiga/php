<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <title>Tabla de Multiplicar</title>
    <style>
        form {
            max-width: 200px;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
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
    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? $_POST['numero'] : '';

        // Validar la entrada
        if (!is_numeric($numero) || $numero < 1 || $numero > 10) {
            echo "Por favor, ingresa un número válido del 1 al 10.";
        } else {
            // Mostrar la tabla de multiplicar
            echo "<h2>Tabla de Multiplicar del $numero</h2>";
            echo "<table>";
            echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }

            echo "</table>";
        }
    }
?>

<!-- Formulario para ingresar el número -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero">Ingresa un número del 1 al 10:</label>
    <input type="text" name="numero" id="numero" required> <br>
    <input type="submit" class="btn btn-primary" id="botonEJemplo2">
</form>

</body>
</html>
