<?php

//ARRAY NUMÉRICO: 
$modulos1 = array(0 => "Programación", 1 => "Bases de datos", 9 => "Desarrollo web en entorno servidor");

$modulos1=[0=>"Programacion", 1=>"Bases de Datos",2=>"Desarrollo web en entorno servidor"];

$modulos1 = ["Programación", "Bases de datos", "Desarrollo web en entorno servidor"];

print_r($modulos1);

echo "<br>";

var_dump($modulos1);

echo "<br>";

echo $modulos1[1];

echo "<br>";


//ARRAY ASOCIATIVO:

$modulos2 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor"); 

$modulos2=["PR"=>"Programacion", "BD"=>"Bases de datos", "DWES"=>"Desarrollo web en entorno servidor"];


echo $modulos2["PR"];

echo "<br>";

//ARRAY MULTIDIMENSIONAL:

$modulos3 = array("PR" => array("Programación", "Lenguaje de marcas y sistemas de gestión de información", "Entornos de desarrollo"), "BD" => array("Bases de datos", "Desarrollo web en entorno cliente", "Despliegue de aplicaciones web"), "DWES" => array("Desarrollo web en entorno servidor", "Desarrollo web en entorno cliente", "Despliegue de aplicaciones web"));


echo $modulos3["PR"][0];

echo "<br>";

echo $modulos3["BD"][1];

echo "<br>";


//En formato [ ]

$ciclos=[
    "DAW"=>["PR" => "Programación", "BD" => "Bases de datos", "PMDMO"=>"Programacion Multimedia"],
    "DAM"=>["PR"=>"Programacion", "BD"=>"Bases de datos", "DWES"=>"Desarrollo web"]
];

echo $ciclos ["DAW"] ["PR"];

echo "<br>";


//ASIGNAR VALORES A UN ARRAY:

$modulos4 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

$modulos4["DWES"]="Desarrollo web en entorno servidor";

echo $modulos4["DWES"];

echo "<br>";


$personajes = ["Hi-Man", "Superman", "Doraemon", "Songoku"];

$personajes[4] = "Caza Fantasmas";

print_r($personajes);

echo "<br>";

$personajes[] = "Los Picapiedra"; //Si no añadimos índice se agrega al final

print_r($personajes);

echo "<br>";


//RECORRER ARRAYS:

$modulos5 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

foreach ($modulos5 as $modulo) {
    echo $modulo;
    echo "<br>";
}

echo "<br>";

foreach ($modulos5 as $clave => $modulo) {
    echo $clave . " - " . $modulo;
    echo "<br>";
}

echo "<br>";


//PUNTEROS:

$punteros = ["posicion 0", "posicion 1", "posicion 2", "posicion 3"]; 

echo current($punteros); //Devuelve el valor de la posición actual del puntero

echo "<br>";

echo next($punteros); //Avanza el puntero una posición y devuelve el valor de la posición actual

echo "<br>";

echo prev($punteros); //Retrocede el puntero una posición y devuelve el valor de la posición actual

echo "<br>";

echo end($punteros); //Avanza el puntero hasta la última posición y devuelve el valor de la posición actual

echo "<br>";

echo reset($punteros); //Retrocede el puntero hasta la primera posición y devuelve el valor de la posición actual

echo "<br>";

echo key($punteros); //Devuelve la clave de la posición actual del puntero

echo "<br>";

//each(); //Devuelve el valor y la clave de la posición actual del puntero y avanza el puntero una posición ¡DEPRECATED!


//UNSET:

$modulos6 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

unset($modulos6["BD"]); //Elimina el elemento del array

print_r($modulos6);

echo "<br>";

unset($modulos6); //Elimina el array

//print_r($modulos6);

echo "<br>";


//ARRAY_VALUES:

$modulos7 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

unset($modulos7["BD"]); //Elimina el elemento del array

print_r($modulos7);

$modulos7 = array_values($modulos7); //Devuelve un array con los valores del array original

print_r($modulos7);

echo "<br>";


//IS_ARRAY:

$modulos8 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

if (is_array($modulos8)) {
    echo "Es un array";
} else {
    echo "No es un array";
}

echo "<br>";

if (is_array($modulos8["PR"])) {
    echo "Es un array";
} else {
    echo "No es un array";
}

echo "<br>";


//COUNT:

$modulos9 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

echo count($modulos9); //Devuelve el número de elementos del array

echo "<br>";


//IN_ARRAY:

$modulos10 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

if (in_array("Programación", $modulos10)) {
    echo "El elemento está en el array";
} else {
    echo "El elemento no está en el array";
}

echo "<br>";


//ARRAY_SEARCH:

$modulos11 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

echo array_search("Programación", $modulos11); //Devuelve la clave del elemento buscado

echo "<br>";

//ARRAY_KEY_EXISTS:

$modulos12 = array("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor");

if (array_key_exists("PR", $modulos12)) {
    echo "La clave está en el array";
} else {
    echo "La clave no está en el array";
}








?>

