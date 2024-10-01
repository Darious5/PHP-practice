<?php 
//ej1 Dado un número, devolver su valor absoluto como una salida//
$int=4;
if ($int<0) {
    $int=$int*-1;
    echo $int;
}
else {
    echo $int;
}
echo "<br>";
//ej2 Dados dos números, devolver un mensaje que indique el mayor de los dos//
$n1=1;
$n2=2;
if ($n1>$n2){
    echo "el numero mayor es ",$n1;
}
else {
    echo "el numero mayor es ",$n2;
}
echo "<br>";
//ej3  Mejora el código anterior para mostrar si ambos números son iguales//
$n1=1;
$n2=2;
if ($n1>$n2){
    echo "el numero mayor es ",$n1;
}
else if ($n2>$n1){
    echo "el numero mayor es ",$n2;
}
else {
    echo "los dos numeros son iguales";
}
echo "<br>";
/*ej4 Dados dos números, devolver un mensaje para mostrarlos ordenados del más pequeño al
más grande*/
$n1=1;
$n2=2;
if ($n1>=$n2){
    echo $n1,$n2;
}
else {
    echo $n2,$n1;
}
echo "<br>";
/*ej5 Dado un año, devolver un mensaje para indicar si es bisiesto o no. Los años bisiestos son
aquellos que son divisibles por 4, excepto aquellos que son divisibles por 100 sin ser por
400*/
$x=2100;
if  ($x%100==0 && $x%400!=0) {
    echo "el año no es bisiesto";
}
elseif ($x%4==0) {
    echo "el año es bisiesto";
}
else {
    echo "el año no es bisiesto";
}
echo "<br>";
//ej6 Devolver la suma de los números del 1 al 100//
$suma=0;
for ($x=1;$x<=100;$x++){
    $suma+=$x;
}
echo $suma;
echo "<br>";
//ej7 Devolver el factorial de 10//
$total=1;
for ($factorial=1;$factorial<=10;$factorial++){
    $total=$factorial*$total;
}
echo $total;
echo "<br>";
//ej8 Dado un entero, devolver todos sus divisores//
$entero=10;
echo "los divisores de ",$entero," son: ";
for ($i=1;$i<=$entero;$i++){
    if ($entero%$i==0){
        echo $i," ";
    }
}
echo "<br>";
//ej9 Dado un entero,devolver un mensaje para señalar si es primo o no//
$entero=5;
$bool=1;
for ($i=1;$i<=$entero;$i++){
    if ($entero%$i==0 && $i!=1 && $i!=$entero){
        $bool=0;
    }
}
if ($bool==0){
    echo "el numero no es primo";
}
else{
    echo "el numero es primo";
}
echo "<br>";
//ej10 Obtener los primeros 20 terminos de la secuencia de fibonacci//
$end=20;
$fibn1=1;
$fibn2=1;
$hold=0;
for ($i=0;$i<=$end;$i++){
    echo $fibn1," ";
    $hold=$fibn2;
    $fibn2=$fibn1+$fibn2;
    $fibn1=$hold;
}
?>