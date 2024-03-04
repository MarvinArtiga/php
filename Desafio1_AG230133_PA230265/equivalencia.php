<!DOCTYPE html>
<html lang="es">
<head>
 <title>Encuesta</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="Content-Script-Type" content="text/javascript" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/encuesta.css" />
 <link rel="stylesheet" href="css/cd-dropdown-menu.css" />
 <link rel="stylesheet" href="css/common.css" />
 <link rel="stylesheet" href="css/demo.css" />
 <!-- <link rel="stylesheet" href="css/icons.css" /> -->
 <link rel="stylesheet" href="css/links.css" />
 <script src="js/modernizr.custom.lis.js"></script>
 <script src="js/prefixfree.min.js"></script>
</head>
<body>
<header>
 <h1 class="extruded">
Tabla de equivalencia de medidas
 </h1>
</header>
<section>
<article>
<?php
 if(isset($_POST['enviar'])):
 $contact = $_POST['contacto'];
 switch($contact): 
 case 'longitud':
    define("EQUIV","8.75");
    $Longitud = 0.25;
    $tabla = "<table class=table>\n<thead>\n";
    $tabla .= "<th scope=col>Centimetros</th>";
    $tabla .= "<th scope=col>Metros</th>";
    $tabla .= "<th scope=col>Pulgadas</th>";
    $tabla .= "<th scope=col>Pies</th>";
    $tabla .= "<th scope=col>Yardas</th>";

    $tabla .= "</thead>\n<tbody>\n";
    


 break;
 case 'volumen':
    define("EQUIV","8.75");
    $colones = 0.25;
    $tabla = "<table class=table>\n<thead>\n";
    $tabla .= "<th scope=col>Centimetros Cubicos</th>";
    $tabla .= "<th scope=col>Metros Cubicos</th>";
    $tabla .= "<th scope=col>Milimetros</th>";
    $tabla .= "<th scope=col>Litro</th>";
    $tabla .= "<th scope=col>Galon</th>";

    $tabla .= "</thead>\n<tbody>\n";
    while($colones <= 1.5 ){
    $tabla .= "<tr>\n<td>&cent; ";
    $tabla .= number_format($colones, 2, '.', ',') . "</td><td>\$ ";
    $tabla .= number_format($colones / EQUIV, 2, '.', ',');
    $colones += 0.25;
    $tabla .= "</td>\n</tr>\n";
    } // fin del while
    $tabla .= "</tbody>\n</table>\n";
    echo $tabla;

 break;

 //No parece necesario porque el ingreso es por medio de un campo select
 default:
 echo "<p>No se puede especificar cómo contactó el cliente con
nuestro sitio web.</p>";
 endswitch;
 $link = "<a href=\"". $_SERVER['PHP_SELF'] ."\" class=\"a-btn\">";
 $link .= "\t<span class=\"a-btn-symbol\">i</span>";
 $link .= "\t<span class=\"a-btn-text\">Volver</span>";
 $link .= "\t<span class=\"a-btn-slide-text\">al formulario</span>";
 $link .= "\t<span class=\"a-btn-slide-icon\"></span>";
 $link .= "</a>";
 echo $link;
 else:
echo "<p>Elige tu equivalencia</p>";
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <select name="contacto" id="cd-dropdown" class="cd-select">

 <option value="-1" selected>(Selecciones una opción)</option>
 <option value="longitud" class="icon-chrome">Longitud</option>
 <option value="volumen" class="icon-safari">Volumen</option>
 
 </select>
 <input type="submit" name="enviar" id="enviar" class="styled-button"
value="Enviar" />
</form>
<?php
 endif;
?>
</article>
</section>
</body>
<script
src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script>
 $(function() {
 $('#cd-dropdown').dropdown({
 gutter : 5,
 stack : false,
 slidingIn : 100
 });
 });
</script>
</html>




<!-- 
while($Longitud <= 1.5 ){
    $tabla .= "<tr><td> ";
    $tabla .= number_format($Longitud, 2, '.', ',') . "</td><td> ";
    $tabla .= number_format($Longitud / EQUIV, 2, '.', ',');
    $Longitud += 0.25;
    $tabla .= "</td>\n</tr>\n";
    } // fin del while
    $tabla .= "</tbody>\n</table>\n";
    echo $tabla; -->

 