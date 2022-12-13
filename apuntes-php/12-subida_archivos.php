<!DOCTYPE html>
<html lang="en">
<?php
function isTipoOk($tipo){
    if($tipo=="application/pdf") return true;
    return false;
}
function comprobarError($i){
        switch ($i){
            case 1:
                echo "<p>El fichero subido excede la directiva upload_max_filesize de php.ini.</p>";
                break;
            case 2:
                echo "<p>El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.</p>";
                break;
            case 3:
                echo "<p>El fichero fue sólo parcialmente subido.</p>";
                break;
            case 4:
                echo "<p>No se subió ningún fichero.</p>";
                break;
            case 6:
                echo "<p>No se pudo escribir en la carpeta temporal</p>";
                break;
            case 8:
                echo "<p>No se pudo escribir el fichero en el disco.</p>";

        }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R1FOR</title>
</head>
<body style="background-color:#1565c0;color:#ffffff;">
<?php
if (isset($_POST["enviar"])) {
    if (is_uploaded_file($_FILES["documento"]["tmp_name"])) {
        if (isTipoOk($_FILES["documento"]["type"])) {
            $nombre = $_FILES["documento"]["name"];
            move_uploaded_file($_FILES["documento"]["tmp_name"], "./documentos/" . $nombre);
            echo "<p>Archivo subido correctamente</p>";
        } else {
            echo "Error, El tipo del archivo no es <b>pdf</b>";
        }
    } else {
        echo "<p>Ha habido errores, estos han sido:</p>";
        comprobarError($_FILES["documento"]["error"]);
    }
}else{
?>
<h3 class="text-center">Subida de un fichero</h3>
<fieldset style="width:40%; margin:auto;">
    <form name="fichero" action="<?php echo $_SERVER['PHP_SELF']; ?>" ENCTYPE="multipart/form-data" method="POST">
        <!-- Establecemos el tamaño máximo del archivo a 50000 bytes -->
        <input type="hidden" name="MAX_FILE_SIZE" value="50000" />
        <label for="file" style="font-weight: bold">Elige el Fichero: </label>&nbsp;<input type="file" name="documento" accept="application/pdf">
        <br><br>
        <button type="submit" value="Subir" name="enviar">Enviar</button>
        <button type="reset" value="reset">Limiar</button>
    </form>
</fieldset>
<?php } ?>
</body>
</html>