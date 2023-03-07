<?php
#$edad = 0;
#echo'Hola mundo'.$edad;
/*$edad1 = readline("Ingrese su edad 1: ");
$edad2 = readline("Ingrese su edad 2: ");*/
$edad1 = 20;
$edad2 = 50;
/*if($edad >= 18){
    echo "Es mayor de edad";
} else {
    echo "No es mayor de edad";
}*/

$proceso = readline("Ingrese su proceso: ");
switch($proceso){
    case 'suma':
        $resultado  = $edad1 + $edad2;
        echo "La suma es: ".$resultado;
    break;
    case 'resta':
        $resultado  = $edad1 - $edad2;
        echo "La resta es: ".$resultado;
    break;
    case 'division':
        $resultado  = $edad1 / $edad2;
        echo "La división es: ".$resultado;
    break;
    case 'multiplicacion':
        $resultado  = $edad1 * $edad2;
        echo "La multiplicación es: ".$resultado;
    break;
#echo'La suma es: '.$suma.' ';
?>