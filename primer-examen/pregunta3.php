<?php

$a = 3; $b = 3;

// Apartado a)
echo($a & $b == true) . "<br>";
//Primero evalúa el == y después el &
echo($a & ($b == true)) . "<br>"; //true

// Apartado b)
//Primero evalúa el & y luego el ==
echo (($a & $b) == true) . "<br>"; //true

// Apartado c)
echo ($a + $a / 10 ** 2 ** 3 ** 4) . "<br>";
//Primero evalúa las potencias de derecha a izquierda
$a + $a / 10 ** 2 ** (3 ** 4);
$a + $a / 10 ** (2 ** (3 ** 4));
$a + $a / (10 ** (2 ** (3 ** 4)));
//Luego evalúa la división
$a + $a / (10 ** (2 ** (3 ** 4)));
// Por último evalúa la suma
echo ($a + ($a / (10 ** (2 ** (3 ** 4))))) . "<br>";

// Apartado d)
//echo ($a++ > 3 ? $b-- : $a) . "<br>"; //Da 4

//Primero evalúa ++ y --. Por ultimo el ternario
echo ((($a++) > 3) ? ($b--) : $a) . "<br>"; //Da 4