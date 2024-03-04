<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Encontrar Mayor y Menor</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" >
        <input type="submit" onclick="agregarNumero()"> <br>

        <select multiple id="numerosSeleccionados" name="numerosSeleccionados[]" required>
        </select>

        <button type="submit">Encontrar Mayor y Menor</button>
    </form>

    <?php
    function encontrarMayor(...$numeros) {
        return max($numeros);
    }

    function encontrarMenor(...$numeros) {
        return min($numeros);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerosSeleccionados = $_POST["numerosSeleccionados"];

        echo "<h2>Números ingresados:</h2>";
        echo "<ul>";
        foreach ($numerosSeleccionados as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";

        $mayor = encontrarMayor(...$numerosSeleccionados);
        $menor = encontrarMenor(...$numerosSeleccionados);

        echo "<p>El número mayor es: $mayor</p>";
        echo "<p>El número menor es: $menor</p>";
    }
    ?>

    <script>
        function agregarNumero() {
            var numeroInput = document.getElementById('numero');
            var numerosSeleccionados = document.getElementById('numerosSeleccionados');

            var option = document.createElement('option');
            option.value = numeroInput.value;
            option.text = numeroInput.value;

            numerosSeleccionados.add(option);
            numeroInput.value = '';
        }
    </script>
</body>
</html>
