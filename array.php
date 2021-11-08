<?php

$numeros = 8;
$numeros = 3;
$numeros = 7; 
$numeros = 1; 

$numeros =array(8,3,7,1);
$suspensos =array("Migue","kerry");
$coche = array ("Ferrari","Seat","BMW");

ECHO $suspensos[0];
echo $numeros[3];


$cuentaCoches=count($coche);

echo "numero de coches".$cuentaCoches;

$aleatorio=rand(0,$cuentaCoches-1);

echo "coche aleatorio:".$coche[$aleatorio];