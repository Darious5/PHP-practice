<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 3</title>
</head>
<body>
    <h1>Ejercicios PHP</h1>
    <h2>Ejercicio1 100 primeros numeros de fibonacci</h2>

    <?php
        $fib1=1;
        $fib2=1;
        $holder=0;
        for ($i=0;$i<100;$i++){
            echo $fib1," ";
            $holder=$fib1;
            $fib1=$fib2;
            $fib2=$holder+$fib2;
        }
    ?>

    <h2>Ejercicio2 funcion n numeros de fibonacci (ejemplo n=5)</h2>

    <?php
    function Fibonacci($num){
        $fib1=1;
        $fib2=1;
        $holder=0;
        for ($i=0;$i<$num;$i++){
            echo $fib1," ";
            $holder=$fib1;
            $fib1=$fib2;
            $fib2=$holder+$fib2;
        }
    }
    Fibonacci (5);
    ?>

    <h2>Ejercicio3 funcion devolver i de Fibonacci (ejemplo num=5)</h2>

    <?php
    function iFibonacci($num){
        $fib1=1;
        $fib2=1;
        $holder=0;
        for ($i=1;$i<$num;$i++){
            $holder=$fib1;
            $fib1=$fib2;
            $fib2=$holder+$fib2;
        }
        echo $fib1;
    }
    iFibonacci (5);
    ?>

    <h2>Diseñar funciones de calculo geometrico</h2>
    <?php
    include ("calculogeometrico.php");
    ?>
    <h3>Perimetro Cuadrado</h3>
    <?php
    echo Cuadrado_Perimetro(3);
    ?>

    <h3>Area Cuadrado</h3>
    <?php
    echo Cuadrado_Area(3)
    ?>

    <h3>Perimetro Rectangulo</h3>
    <?php
    echo Rectangulo_Perimetro(4, 5);
    ?>

    <h3>Area Rectangulo</h3>
    <?php
    echo Rectangulo_Area (4,5);
    ?>

    <h3>Perimetro Triangulo Rectangulo</h3>
    <?php
    echo Triangulo_Rectangulo_Perimetro(4,5);
    ?>

    <h3>Area Triangulo Rectangulo</h3>
    <?php
    echo Triangulo_Rectangulo_Area(4,5);
    ?>

    <h3>Perimetro Triangulo equilatero</h3>
    <?php
    echo Triangulo_Equilatero_Perimetro (3);
    ?>

    <h3>Triangulo Equilatero Area</h3>
    <?php
    echo Triangulo_Equilatero_Area(4);
    ?>
</body>
</html>