<?php
//MÉTODO GET: 
/*
    //En el formulario, habría que indicar method="GET";
    if(isset($_GET['modulo'])){
        echo "Tu nombre es: {$_GET['nombre']}";
    }
    $totalModulos = 0;
    //comprobamos si nos ha llegado algún módulo
    if (isset($_GET['modulo'])) {
        $totalModulos = count($_GET['modulo']); //los contamos
        echo "<br>Los módulos elegidos han sido: ";
        echo "<ol>";
            foreach ($_GET['modulo'] as $k => $v) { //los recorremos y mostramos
                echo "<li>$v</li>";
            }
        echo "</ol>";
    }
    echo "<br>Has elegido un total de: $totalModulos módulos";
*/

//MÉTODO POST: 

//En el formulario, habría que indicar method="POST";

    if (isset($_POST['nombre'])){
        echo "Tu nombre es: {$_POST['nombre']}";
    } 
    $totalModulos = 0;
    //comprobamos si nos ha llegado algún módulo
    if (isset($_POST['modulo'])) {
        $totalModulos = count($_POST['modulo']); //los contamos
        echo "<br>Los módulos elegidos han sido: ";
        echo "<ol>";
            foreach ($_POST['modulo'] as $k => $v) { //los recorremos y mostramos
                echo "<li>$v</li>";
            }
        echo "</ol>";
        echo "<br>Has elegido un total de: $totalModulos módulos";
    }

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body style="background: honeydew">
<fieldset style="width:40%; margin:auto">
    <legend style="font-weight: bold">Datos</legend>
    <form name="form1" action="11.1-formularios_web.php" method="POST">
        <p>Nombre:&nbsp<input type="text" name="nombre" placeholder="Nombre" required /></p>
        <fieldset style="width:50%">
            <legend style="font-weight: bold">Elige Modulos</legend>
            <p><input type="checkbox" name="modulo[]" value="DWESE" />&nbsp;Desarrollo Web en Entorno Sevidor.</p>
            <p><input type="checkbox" name="modulo[]" value="DWEC" />&nbsp;Desarrollo Web en Entorno Cliente.</p>
        </fieldset>
        <div style="text-align: center; margin-top: 5px">
            <input type="submit" value="Enviar" name="enviar" />&nbsp;&nbsp;
            <input type="reset" value="Limpiar" />
        </div>
    </form>
</fieldset>
</body>
</html>

<!-- Fíjate que si en un formulario web tienes que enviar 
alguna variable en la que sea posible almacenar más de un valor, 
como es el caso de las casillas de verificación en el ejemplo 
anterior (se pueden marcar varias a la vez), tendrás que ponerle 
corchetes al nombre de la variable para indicar que se trata de 
un array. -->