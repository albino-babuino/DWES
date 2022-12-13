<?php
    //ECHO, PRINT Y PRINTF:
    echo "echo <br>";

    print "print <br>";

    printf("Esto es un printf con una variable de tipo string %s y otra de tipo numérico %d <br>", "'string'", 5);
    printf("voy a sumar dos números %d + %d = %d <br>", 5, 5, 5+5);
    printf("El número Pi vale %.10f <br>", pi());

    //SPRINTF:
    $text_pi = sprintf("El número Pi vale %.10f <br>", pi());
    echo $text_pi;


?>