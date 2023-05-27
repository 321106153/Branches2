<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Comentario
/* Hola */
//CONSTANTES
const CONSTANTE = "Hola";
echo CONSTANTE;
define("HOLA2",56);
echo "<br>";
echo HOLA2;

//TIPOS DE DATOS
//ENTERO
$var1 =1;
$var2 =50;

//FLOTANTE
$flotante= 5.5;
$PI= 3.1416;

//NULOS
$sereUnNulo =NULL;
echo "<br>";
echo $PI;
echo "<br>";
echo $var2;
echo "<br>";
echo $sereUnNulo;

//CADENAS
$cadenita ="chambear";
echo "<br>";
echo $cadenita;

//BOOL
$soy_un_bool= false;
echo $soy_un_bool;

echo"<br>", $var1, "<br>", $var2;
echo "<br>";
print "Soy un print";
echo "<br>";
printf ("A mi no me gusta %s",$cadenita);
echo "<br>";
var_dump($var1);
echo "<br>";
var_dump($cadenita);

echo"<br>".$var1. "<br>". $var2;


$entero1= 10;
$entero2= 5;
$entero3= -11;

//$entero1 = $entero2 - $entero3;
echo "<br>";
//echo $entero1; 

//$entero1 = $entero3 / $entero2;
//echo $entero1;
//$entero1= +$entero3;




// $entero1 += $entero3;
// echo $entero1;

// array_push($arregloChido, "Que", "Tu", "Me", "Regalaste");

// for ($i=0, $i<6; $i++){
//     echo $arregloChido[$i]. " ";

// }
// echo "<br>";

$string = "Me llamo Nelli <br>";
echo substr($string, 9, 8);
$array= array (5,8,9,3,2);
shuffle($array);
sort($array);

// echo rand (1, 72);
// var_dump($array);

echo chr(72);

?> 
</body>
</html>