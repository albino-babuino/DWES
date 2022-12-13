<?php

//VARIABLES SUPERGLOBALES: 
//Son variables que se encuentran disponibles en todos los ambitos del script.

//VARIABLES DE SERVIDOR:
//Son variables que contienen información sobre el entorno del servidor y el script que se está ejecutando.

//$_SERVER:
//Es un array asociativo que contiene información como cabeceras, rutas y ubicaciones de script.

//Ejemplo:
echo "<h3>Variables de servidor: </h3>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Nombre del script: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Nombre del host: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Nombre del usuario: " . $_SERVER['REMOTE_USER'] . "<br>";
echo "Nombre del agente de usuario: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Nombre del método de petición: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Nombre del protocolo: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "Nombre del puerto: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Nombre del nombre del archivo: " . $_SERVER['PHP_SELF'] . "<br>";

//$_GET:
//Es un array asociativo de variables pasadas al script mediante el método GET.

//Ejemplo:
echo "<h3>Variables de envío: </h3>";
echo "Nombre del script: " . $_GET['nombre'] . "<br>";

//$_POST:
//Es un array asociativo de variables pasadas al script mediante el método POST.

//Ejemplo:
echo "<h3>Variables de envío: </h3>";
echo "Nombre del script: " . $_POST['nombre'] . "<br>";

//VARIABLES DE COOKIES:
//Son variables que contienen información sobre cookies.

//$_COOKIE:
//Es un array asociativo de variables pasadas al script mediante el método COOKIE.

//Ejemplo:
echo "<h3>Variables de cookies: </h3>";
echo "Nombre del script: " . $_COOKIE['nombre'] . "<br>";

//$_REQUEST:
//Es un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.

//Ejemplo:
echo "<h3>Variables de envío: </h3>";
echo "Nombre del script: " . $_REQUEST['nombre'] . "<br>";

//VARIABLES DE SESIÓN:
//Son variables que contienen información sobre sesiones.

//$_SESSION:
//Es un array asociativo que contiene las variables de sesión disponibles para el guion actual..

//Ejemplo:
echo "<h3>Variables de sesión: </h3>";
echo "Nombre del script: " . $_SESSION['nombre'] . "<br>";

//$_ENV:
//Es un array asociativo que contiene las variables que se puedan haber pasado a PHP desde el entorno en que se ejecuta.

//Ejemplo:
echo "<h3>Variables de entorno: </h3>";
echo "Nombre del script: " . $_ENV['nombre'] . "<br>";

//$_FILES: 
//Es un array asociativo que Contiene los ficheros que se puedan haber subido al servidor utilizando el método POST.

//Ejemplo:
echo "<h3>Variables de ficheros: </h3>";
echo "Nombre del script: " . $_FILES['nombre'] . "<br>";

//$_GLOBALS:
//Es un array asociativo que contiene las referencias a todas la variables que están definidas en el ámbito global del script. Los nombres de las variables son las claves del array. 

//Ejemplo:
echo "<h3>Variables globales: </h3>";
echo "Nombre del script: " . $GLOBALS['nombre'] . "<br>";



?>