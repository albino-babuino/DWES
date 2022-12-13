<?php
    // Inicializo la lista vacía
    $lista = [];

    //Recogida de datos del formulario para rellenar la lista
    if(isset($_POST['lista'])){
        $lista = $_POST['lista'];
    }

    //Recogida de datos de formulario para añadir dato
    if(isset($_POST['enviar'])){
        $dato = trim($_POST['dato']);
        if(empty($dato)){
            echo 'Agrega un dato';
        } else{
            $lista[] = $dato;
            //print_r($lista);
            //echo "dato agregado correctamente";
        }
    }

    // Borrar el primer dato de la agenda
    if(isset($_POST['borrar'])){
        unset($lista[0]);
        $lista = array_values($lista);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREGUNTA</title>
</head>
<body>
    <!-- Formulario para guardar datos -->
    <form action="" method="POST">
        <label for="dato">Introduzca el dato a guardar</label>
        <input name="dato" type="text">
        <!-- Aquí es donde se guardan los datos -->
        <?php foreach($lista as $dato) : ?>
            <input type="hidden" name="lista[]" value="<?=$dato?>">
        <?php endforeach; ?>

        <input type="submit" name="enviar"value="Enviar">
        <input type="submit" name="borrar"value="Borrar">
    </form>

    <!-- Mostrar datos -->
    <h4>Datos introducidos hasta ahora:</h4>
    <?php if(empty($lista)) {
        echo "<p>No hay datos por el momento</p>";
    } else { 
        foreach($lista as $key => $dato){ ?>
            <p>Dato  <?=$key + 1?>: <?=$dato ?></p>
        <?php }
    } ?>

</body>
</html>