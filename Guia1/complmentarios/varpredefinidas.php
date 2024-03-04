<!DOCTYPE html>
<html>
<head>
    <title>Dirección Completa del Script</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    // Obtener el nombre del servidor
    $serverName = $_SERVER['SERVER_NAME'];

    // Obtener la ruta del script actual
    $scriptPath = $_SERVER['PHP_SELF'];

    // Construir la dirección completa del script
    $fullAddress = "http://$serverName$scriptPath";
?>

<p>La dirección completa del script es: <?php echo $fullAddress; ?></p>

</body>
</html>
