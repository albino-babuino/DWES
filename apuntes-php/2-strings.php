<?php

    //STRINGS: 
    $string = "Esto es un string";
    echo "Con comillas dobles se puede poner variables dentro de un string: $string <br>";
    echo 'Con comillas simples no se puede poner variables dentro de un string: $string <br>';
    
    //Para que PHP distinga correctamente el texto que forma la cadena del nombre de la variable, a veces es necesario rodearla entre llaves. Sobre todo cuando trabajemos con POO.
    print "<p>string: ${string}</p>";

    //Para concatenar strings se puede usar el punto (.) o la función concat().
    $string2 = "Esto es otro string";
    echo $string . " " . $string2 . "<br><br>";

    //heredoc
    $heredoc = <<<STRING
    Esto es un heredoc <br>
    Sirve para escribir strings largos <br>
    Multilínea <br>
    STRING;
    echo $heredoc . "<br>";