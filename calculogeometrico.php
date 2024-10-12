<?php
    function Cuadrado_Perimetro($lado){
        return $lado*4;
    }

    function Cuadrado_Area($lado){
        return $lado*$lado;
    }

    function Rectangulo_Perimetro($lado1, $lado2){
        return $lado1*2+$lado2*2;
    }

    function Rectangulo_Area($lado1, $lado2){
        return $lado1+$lado2;
    }

    function Triangulo_Rectangulo_Perimetro($base,$altura){
        return $base+$altura+sqrt($base**2+$altura**2);
    }

    function Triangulo_Rectangulo_Area($base,$altura){
        return ($base*$altura)/2;
    }

    function Triangulo_Equilatero_Perimetro($lado){
        return $lado*3;
    }

    function Triangulo_Equilatero_Area($lado){
        return (sqrt(3)/4)*$lado**2;
    }
?>