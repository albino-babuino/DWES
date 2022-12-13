<?php
//Definir idioma:
setlocale(LC_ALL, 'es_ES.UTF-8');
//Debes tener en cuenta que la función date() no lee los "locales",  para hacer uso de los nombres en español (lunes, Enero...) deberás usar la función strftime() 

//Zona horaria:
date_default_timezone_set('Europe/Madrid');

//Definir formato de fecha:
$formato = '%A, %d de %B de %Y, %H:%M:%S' . '<br>';

//Imprimir fecha:
echo strftime($formato, time());

//Formato de fecha/reloj:
echo date("d/m/Y - H:i:s") . "<br>";
echo date("r") . "<br>";

//getdate():
$fecha = getdate(); //devuelve un array con la fecha actual;
echo $fecha['mday'] . "/" . $fecha['mon'] . "/" . $fecha['year'] . "<br>";
echo $fecha['hours'] . ":" . $fecha['minutes'] . ":" . $fecha['seconds'] . "<br>";

//DateTime:
$fecha = new DateTime();
echo $fecha->format('d/m/Y - H:i:s') . "<br>";
echo $fecha->format('r') . "<br>";

//Crear una fecha a partir de un String:
$fecha = new DateTime('2015-01-01 12:00:00');
echo $fecha->format('d/m/Y - H:i:s') . "<br>";
echo $fecha->format('r') . "<br>";

$ahora=new DateTime();
var_dump($ahora);
echo "<br>";

$ayer=new dateTime("yesterday");
var_dump($ayer);
echo "<br>";

$ultimoLunes=new DateTime("Last Monday");
var_dump($ultimoLunes); 
echo "<br>";

//Pasar la fecha al formato que queramos y sacar el "timestamp" (marca de tiempo a una fecha):
$fecha = new DateTime('2015-01-01 12:00:00');
echo $fecha->getTimestamp() . "<br>";

//Ejemplo:
echo "<h3>Ejemplo de fecha: </h3>";
setlocale(LC_ALL, 'es_ES.UTF-8');
date_default_timezone_set('Europe/Madrid');
$ahora=new DateTime();
$fecha = strftime("Hoy es %A, %d de %B de %Y y son las %H:%M:%S", date_timestamp_get($ahora));
echo $fecha;