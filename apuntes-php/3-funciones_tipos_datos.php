<?php

$string = "Esto es un string";

    //FUNCIONES PARA TIPOS DE DATOS: 
    //gettype(): devuelve el tipo de dato de una variable
    echo gettype($string) . "<br>";

    //settype(): cambia el tipo de dato de una variable
    $pi = "3.1416";
    settype($pi, "integer");
    echo gettype($pi) . "<br>";

    //Si lo único que te interesa es saber si una variable está definida y no es null, puedes usar la función isset
    $variable = "Hola";
    if(isset($variable)){
        echo "La variable está definida y no es null <br>";
    }

    //La función unset destruye la variable o variables que se le pasa como parámetro.
    $var = "definida";
    unset($var);
    if(!isset($var)){
        echo "La variable no está definida <br>";
    }
    
    //La función empty() comprueba si una variable está vacía o no. Una variable se considera vacía si no existe o si su valor es igual a false.
    $var = "";
    if(empty($var)){
        echo "La variable está vacía <br>";
    }

    //Definir constantes
    define("PI", 3.1416);
    echo PI . "<br>";

    //is_string(): devuelve true si la variable es un string
    echo is_string($string) . "<br>";

    //is_int(): devuelve true si la variable es un entero
    echo is_int($string) . "<br>";

    //is_float(): devuelve true si la variable es un float
    echo is_float($string) . "<br>";

    //is_bool(): devuelve true si la variable es un booleano
    echo is_bool($string) . "<br>";

    //is_null(): devuelve true si la variable es null
    echo is_null($string) . "<br>";

    //is_array(): devuelve true si la variable es un array
    echo is_array($string) . "<br>";

    //is_object(): devuelve true si la variable es un objeto
    echo is_object($string) . "<br>";

    //is_numeric(): devuelve true si la variable es un número
    echo is_numeric($string) . "<br>";

    //is_callable(): devuelve true si la variable es una función
    echo is_callable($string) . "<br>";

    //is_resource(): devuelve true si la variable es un recurso
    echo is_resource($string) . "<br>";

    //is_a(): devuelve true si la variable es un objeto de la clase indicada
    echo is_a($string, "string") . "<br>";

    //is_subclass_of(): devuelve true si la variable es un objeto de una subclase de la clase indicada
    echo is_subclass_of($string, "string") . "<br>";

    //is_iterable(): devuelve true si la variable es iterable
    echo is_iterable($string) . "<br>";

    //is_countable(): devuelve true si la variable es un contador
    echo is_countable($string) . "<br>";

    //is_scalar(): devuelve true si la variable es un escalar
    echo is_scalar($string) . "<br>";

    //is_finite(): devuelve true si la variable es un número finito
    echo is_finite(5) . "<br>";

    //is_infinite(): devuelve true si la variable es un número infinito
    echo is_infinite(5) . "<br>";

    //is_nan(): devuelve true si la variable es un número no válido
    echo is_nan(5) . "<br>";

    //is_numeric(): devuelve true si la variable es numérica
    echo is_numeric($string) . "<br>";


