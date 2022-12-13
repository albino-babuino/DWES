<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
          user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body style="background: gainsboro">
<fieldset style="width:40%; margin:auto">
    <legend style="font-weight: bold">Datos</legend>
    <form name="form1" action="11.3.2-formularios_web.php" method="POST">
        <p>
            <label for="n">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" id="n" required>
        </p>
        <p>
            <label for="a">Apellidos: </label>
            <input type="text" maxlength="60" name="apellidos" id="a" placeholder="Apellidos">
        </p>
        <p>
            <label for="e">Correo-e: </label>
            <input type="mail" placeholder="e-mail" required name="mail" required id="e">
        </p>
        <p>
            <label for="ed">Edad: </label>
            <input type="number" placeholder="edad" min="0"  id="ed" step="1" name="edad" required>
        </p>
        <fieldset style="width:50%">
            <legend style="font-weight: bold">Elige Modulos (Al menos 1)</legend>
            <p>
                <input type="checkbox" name="modulo[]" value="DWES">
                Desarrollo Web en Entorno Sevidor.
            </p>
            <p>
                <input type="checkbox" name="modulo[]" value="DWEC">
                Desarrollo Web en Entorno Cliente.
            </p>
            <p>
                <input type="checkbox" name="modulo[]" value="HLC">
                Horas de Libre Configuración.
            </p>
        </fieldset>
        <div style="text-align: center; margin-top: 5px">
            <input type="submit" value="Enviar" name="enviar">&nbsp;&nbsp;
            <input type="reset" value="Limpiar" />
        </div>
    </form>
</fieldset>
</body>
</html>