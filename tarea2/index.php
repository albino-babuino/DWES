<?php

//Inicializamos la agenda vacía
$agenda = [];

//Inicializamos los arrays que contendrán los mensajes de error, avisos y éxito
$errores = [];
$avisos = [];
$mensajes = [];

//Recogida de datos de formulario para rellenar la agenda
if (isset($_POST['agenda'])) {
    $agenda = $_POST['agenda'];
} 

//Recogida de datos de formulario para añadir un contacto
if(isset($_POST['enviar'])){
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    //Si el nombre en el formulario está vacío, añadimos un mensaje de error
    if(empty($nombre)){
        $errores[] = "Debes agregar un nombre <br>";
    } else {
        // Si el nombre que se introdujo ya existe en la agenda y no se indica número de teléfono, se eliminará de la agenda la entrada correspondiente a ese nombre.
        if(empty($telefono)){
            unset($agenda[$nombre]);
            $avisos[] = "Teléfono vacío. Se ha eliminado el contacto: " . $nombre . " <br>";
        }else{
            // Lo siguiente cumple los dos primeros apartados que se piden: 
                // Si el nombre que se introdujo no existe en la agenda, y el número de teléfono no está vacío, se añadirá a la agenda.
                // Si el nombre que se introdujo ya existe en la agenda y se indica un número de teléfono, se sustituirá el número de teléfono anterior.
            $agenda[$nombre] = $telefono;
            $mensajes[] = "Contacto añadido satisfactoriamente <br>";
        }
    }
}

// En el momento que la agenda tenga un nombre nos aparecerá un nuevo formulario que nos permitirá vaciar todos los contactos. Para ello mandaremos en la url una variable a la misma página de la agenda (fíjate en la url de la primera imagen). Al procesar la página comprobaremos si nos ha llegado o no esta variable (acuérdate de $_GET)

if(isset($_GET['vaciar'])){
    // Si se pulsa el botón de vaciar, se vaciará la agenda.
    $agenda = [];
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4 p-4 rounded-4" id="agenda">
        
        <h3 class="mb-4 text-center">AGENDA</h3>

        <!-- Mensajes de error -->
        <?php if(!empty($errores)){
            foreach($errores as $error){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }
        } ?>

        <!-- Mensajes de aviso -->
        <?php if(!empty($avisos)){
            foreach($avisos as $aviso){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $aviso; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }
        } ?>

        <!-- Mensajes de éxito -->
        <?php if(!empty($mensajes)){
            foreach($mensajes as $mensaje){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $mensaje; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }
        } ?>

        <!-- Mostrar agenda de contactos -->
        <div class="agenda mb-4">
            <h4 class="mb-3">Contactos</h4>
            <?php if(empty($agenda)) { ?>
                <div class="alert alert-warning">No hay contactos por el momento</div>
                <?php } else { ?>
                    <ul>
                        <?php foreach($agenda as $nombre => $telefono) : ?>
                            <li>
                                <?=$nombre?>: <?=$telefono?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
        </div>

        <!-- Agregar contacto a la agenda -->
        <fieldset class="field-set">
            <legend class="mb-3">Nuevo contacto</legend>

            <!-- Formulario para agregar un nuevo contacto a la agenda -->
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="POST">

                <?php foreach ($agenda as $nombre => $telefono) : ?>
                    <input type="hidden" name="agenda[<?=$nombre?>]" value="<?=$telefono?>">
                <?php endforeach; ?>

                <label for="nombre">Nombre</label>
                <input class="w-100 my-2" type="text" name="nombre" id="nombre">

                <label for="telefono">Teléfono</label>
                <input class="w-100 mt-2 mb-4" type="text" name="telefono" id="telefono">

                <input class="btn btn-primary w-25" type="submit" name="enviar" value="Añadir contacto">
                <input class="btn btn-warning w-25" type="reset" value="Limpiar campos">
            </form>
        </fieldset>

        <!-- Formulario para vaciar la agenda -->
        <?php if(!empty($agenda)){ ?>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="vaciar" method="GET">
                <input class="btn btn-danger mt-2 w-25" type="submit" value="Vaciar agenda">
            </form>
        <?php } ?>
    </div>


    <!-- BOOTSTRAP Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>