<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>
<body style="background: gainsboro">
<h3 style="text-align: center; font-weight: bold">Login</h3>
<?php
    /*aqui procesaremos el formulario comprobando si hemos pulsado el submit
      si lo hemos hecho procesamos los datos, si no mostramos el formulario
      fijate donde cerramos el "else" */
    if(isset($_POST['enviar'])){
        // --> procesamos los datos
        echo "Tu nombre es: <b>{$_POST['nombre']}</b> y tu mail <b>{$_POST['mail']}</b>";
    }
    else{// -->Si no hemos dado al boton enviar, pintamos el formulario
?>
<fieldset style="width:50%; margin:auto">
    <legend>Datos</legend>
    <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br><br>
        <input tpe="mail" name="mail" placeholder="e-mail" name="mail" required><br><br>
        <input type="submit" value="Enviar" name="enviar">&nbsp;&nbsp;
        <input type="reset" value="Limpiar">
    </form>
</fieldset>
<?php }  ?> <!--Cierre del else-->
</body>
</html>


<!-- 
En la línea 13 comprobamos si hemos dado al botón enviar "$_POST" por qué el "method" del formulario es POST, si hubiese sido GET hubiésemos puesto "$_GET". En ambos casos podíamos haber utilizado "$_REQUEST". Si es así, procesamos el formulario (en este caso solo mostramos los valores enviado con un "echo").
En la línea 17, si no hemos hecho el submit del formulario, lo que hacemos es mostrar el mismo.
En la línea 22 podemos ver en el action, el valor de "$_SERVER['PHP_SELF']" que ya vimos que hacía referencia a la página actual.
En la línea 29 cerramos el else abierto más arriba. 
-->
