<?php
/*esto es un ejemplo de comentario
de mas de una linea */

//ejemplos//
echo "hola mundo","<br>","holamundo2";
echo "<h1>titulo1</h1>";
$a=4;
$b=3;
echo $a+$b;
define ("saludo","buenos dias");
echo saludo;
echo "<br>";
?>
<?php
//ej2//
$edad=17;
if ($edad>=18){
    echo "tienes ",$edad, " años"," eres mayor de edad";
}
else {
    echo  "tienes ",$edad, " años"," eres menor de edad";
}
?>
<br>

<?php
//ej3//
if ((date("H"))<12){
    echo "buenos dias";
}
elseif ((12<date("H"))<22){
    echo "buenas tardes";
}
else {
    echo "buenas noches";
}
?>
<br>
<?php
//ej4//
$dia=date("l");

switch ($dia){
    case "Monday": echo "hoy es Lunes"; break;
    case "Tuesday": echo "hoy es Martes"; break;
    case "Wednesday": echo "hoy es Miercoles"; break;
    case "Thursday": echo "hoy es Jueves"; break;
    case "Friday": echo "hoy es Viernes"; break;
    case "Saturday": echo "hoy es Sabado"; break;
    case "Sunday": echo "hoy es Domingo"; break;
}

?>
<br>
<?php
//ej5//
//de 0 a 10 con bucle for//
for ($x=0;$x<=10;$x++){
    echo " ",$x;
}
echo "<br>";
//de 50 a 80 solo numeros pares con bucle for//
for ($x=50;$x<=80;$x=$x+2){
    echo " ",$x;
}
echo "<br>";
//de 17 a -17 con bucle for//
for ($x=17;$x>=-17;$x--){
    echo " ",$x;
}
echo "<br>";
//La tabla del 6 con bucle for//
echo "La Tabla del 6";
echo "<br>";
for ($x=0;$x<=10;$x++){
    echo "6 x ",$x," = ",(($x)*6),"<br>";
}
?>
<?php
//ej6//
//de 0 a 10 con bucle while//
$x=0;
while ($x<=10){
    echo " ",$x;
    $x++;
}
echo "<br>";
//de 50 a 80 solo numeros pares con bucle while//
$x=50;
while ($x<=80){
    echo " ",$x;
    $x=$x+2;
}
echo "<br>";
//de 17 a -17 con bucle while//
$x=17;
while ($x>=-17){
    echo " ",$x;
    $x--;
}
echo "<br>";
//La tabla del 6 con bucle while//
echo "La Tabla del 6";
$x=0;
while ($x<=10){
    echo "<br>","6 x ",$x," = ",($x*6);
    $x++;
}
?>
<?php 
//ej7//
$ventas=array(15,43,25,76);
$total=0;
foreach($ventas as $v){
    $total+=$v;
}
echo "<br>",$total;
?>