<?php

    function cuadrado ($n){
        echo "<center>";
        for ($i=0; $i<=$n; $i++){
            for ($y=0; $y<=$n; $y++){
                echo " * ";
            }echo "<br>";
        } 
    }

    function triangulo($n){
        echo "<center>";
        for($i=0; $i <=$n; $i++){
            for($y=0; $y<=$i;$y++){
                echo " * ";
            } echo "<br>";
        }
    }

    function diamante($n){
        echo "<center>";
        for($i=0; $i <=$n; $i++){
            for($y=0; $y<=$i;$y++){
                echo " * ";
            } echo "<br>";
        }
        for($i=$n-1; $i >=0; $i--){
            for($y=0; $y<=$i;$y++){
                echo " * ";
            } echo "<br>";
        }
    }

    function square($n) {
        if ($n<2) {
            return [];
        }
        //relleno el array desde la posición cero, con * + huecos (n - 2) + *
        $my_array = array_fill(0, $n, "*" . str_repeat(" ", $n-2) . "*");
        //Ahora las posiciónes 0 y la última las hago con * n veces
        $my_array[0] = $my_array[$n-1] = str_repeat("*", $n);
        //retorno el array
        return $my_array;
    }

    function rombo($n) {
        $result = array_map(
            function ($i) use ($n) {
                return str_repeat(" ", ceil($n/2)-$i-1) . str_repeat("*", $i+$i+1);
            }, range(0, ceil($n/2)-1)
        );
        return array_merge($result, array_reverse(array_slice($result, 0, -1)));
    }

    function piramide($n) {
        return array_map(
            function ($i) use ($n) {
                return str_repeat(" ", $n-$i-1) . str_repeat("*", $i+$i+1);
            }, range(0, $n-1)
        );
    }

    function forma1(){
        $ancho = 10;
            for ($fila = 1; $fila <= $ancho; $fila++) {
                for ($columna = 1; $columna <= $fila; $columna++) {
                    echo '*';
                }
                echo "\n";
            }    
    }

    function forma2(){
        $ancho = 10;
        for ($fila = 1; $fila <= $ancho; $fila++) {
            for ($columna = 1; $columna <= ($ancho - $fila); $columna++) {
                echo '*';
            }
            echo "\n";
        }  
    }

    function forma3(){
        $ancho = 10;
        for ($fila = 1; $fila <= $ancho; $fila++) {
            for ($columna = 1; $columna <= $ancho; $columna++) {
                if ($columna < $fila) {
                    echo ' ';
                } else {
                    echo '*';
                }
            }
            echo "\n";
        }  
    }

    if(!isset($_POST['enviar'])){
        echo 'Introduce un número';
    }else{
        //Hay dos formas de convertir el string que recibimos a integer
        /*Forma 1
        $numero = $_POST['numero'];
        settype($numero, "integer");*/
        //Forma 2
        $numero = (int) $_POST['numero'];
    }

    if(isset($_POST['reset'])){
        unset($numero);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Introducir el número -->
    <form action="" method="POST">
        <label for="numero">Intoduce un número para dibujar formas</label>
        <input name="numero" type="number">
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="reset" value="Reset">
    </form>

    <!-- Dibujar las formas -->
    <?php
        if(isset($numero)){
            if($numero < 1 || $numero > 20){
                echo "<p>El número debe ser mayor que 1 y menor que 20</p>";
            }else{
                //Salida cuadrado
                echo "<pre>";
                echo cuadrado($numero);
                echo "</pre>";
    
                //Salida triángulo
                echo "<pre>";
                echo triangulo($numero);
                echo "</pre>";
    
                // Salida diamante
                echo "<pre>";
                echo diamante($numero);
                echo "</pre>";
    
                // Salida square
                echo "<pre>";
                echo implode("<br>", square($numero));
                echo "</pre>";
        
                // Salida rombo
                echo "<pre>";
                echo implode("<br>", rombo($numero));
                echo "</pre>";
        
                // Salida pirámide
                echo "<pre>";
                echo implode("<br>", piramide($numero));
                echo "</pre>";

                echo "<pre>";
                echo forma1();
                echo "</pre>";

                echo "<pre>";
                echo forma2();
                echo "</pre>";

                echo "<pre>";
                echo forma3();
                echo "</pre>";
            }

        }
    ?>
</body>
</html>