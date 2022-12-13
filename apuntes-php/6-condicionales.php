<?php

$a=0;
$b=1;

//IF, ELSE, ELSEIF:

if ($a < $b)
    print "a es menor que b";
elseif ($a > $b)
    print "a es mayor que b";
else
    print "a es igual a b";

echo "<br>";

//SWITCH:

switch ($a) {
    case 0:
        print "a es igual a 0";
        break;
    case 1:
        print "a es igual a 1";
        break;
    default:
        print "a no es igual a 0 ni a 1";
}

echo "<br>";

