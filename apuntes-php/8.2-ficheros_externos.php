<?php

//INCLUDE: 
//include "8.1-ficheros_externos.php";

//INCLUDE_ONCE: 
//Include_once funciona exactamente igual que include, pero solo incluye aquellos ficheros que aún no se hayan incluido, hay que tener cuidado de no abusar de esta opción pues es mucho más pesada al tener que comprobar una y otra vez los ficheros incluidos.
// include_once "8.1-ficheros_externos.php";

//REQUIRE:
//Si el fichero que queremos incluir no se encuentra, include da un aviso y continua la ejecución del guion. La diferencia más importante al usar require es que en ese caso, cuando no se puede incluir el fichero, se detiene la ejecución del guion.
require "8.1-ficheros_externos.php";

//REQUIRE_ONCE:
//Es la combinación de las dos anteriores. Asegura la inclusión del fichero indicado solo una vez, y genera un error si no se puede llevar a cabo, al igual que include_once y por los mismos motivos no conviene abusar de esta opción.
// require_once "8.1-ficheros_externos.php";

echo teletransporte();

echo "<br>";

echo $teletransportada;

?>