<?php

//FUNCIONES:
$iva = true;
$precio = 10;

function precioConIva() {
    global $precio; //podemos usar también $precio = $GLOBALS["precio"];
    $precioIva = $precio * 1.18;
    echo "El precio con IVA es ".$precioIva;
}

precioConIva();

echo "<br>";

//ARGUMENTOS:
function precioConIva2($precio) {
    $precioIva = $precio * 1.18;
    echo "El precio con IVA es ".$precioIva;
}

precioConIva2(10);

echo "<br>";

//ARGUMENTOS POR DEFECTO:
function precioConIva3($precio = 10) {
    $precioIva = $precio * 1.18;
    echo "El precio con IVA es ".$precioIva;
}

precioConIva3();

//Nota: Puede haber valores por defecto definidos para varios argumentos, pero en la lista de argumentos de la función todos ellos deben estar a la derecha de cualquier otro argumento sin valor por defecto.

echo "<br>";

//ARGUMENTOS POR REFERENCIA:
function precioConIva4(&$precio) {
    $precioIva = $precio * 1.18;
    echo "El precio con IVA es ".$precioIva;
}

precioConIva4($precio);

echo "<br>";

echo "El precio es ".$precio;

echo "<br>";

//ARGUMENTOS VARIABLES:
function precioConIva5(...$precios) {
    $precioIva = 0;
    foreach ($precios as $precio) {
        $precioIva += $precio * 1.18;
    }
    echo "El precio con IVA es ".$precioIva;
}

precioConIva5(10, 20, 30);

echo "<br>";

//RETORNO DE VALORES:
function precioConIva6($precio) {
    $precioIva = $precio * 1.18;
    return $precioIva;
}

$precioIva = precioConIva6(10);

echo "El precio con IVA es ".$precioIva;

echo "<br>";

//RETORNO DE VALORES POR REFERENCIA:
function &precioConIva7($precio) {
    $precioIva = $precio * 1.18;
    return $precioIva;
}

$precioIva = &precioConIva7(10);

echo "El precio con IVA es ".$precioIva;

echo "<br>";

//FUNCIONES ANÓNIMAS:
$precioIva = function($precio) {
    $precioIva = $precio * 1.18;
    return $precioIva;
};

echo "El precio con IVA es ".$precioIva(10);

echo "<br>";

//FUNCIONES ANÓNIMAS Y VARIABLES:
$precioIva = function($precio) {
    $precioIva = $precio * 1.18;
    return $precioIva;
};

$precio = 10;

echo "El precio con IVA es ".$precioIva($precio);

echo "<br>";

//FUNCIONES CON TIPADO:
function precioIva(float $precio) :float{ //con :float especificamos el tipo d dato a devolver
    return $precio * 1.18;
}
$precio = 10;
$precioIva = precioConIva($precio);
echo  "El precio con IVA es $precioIva";