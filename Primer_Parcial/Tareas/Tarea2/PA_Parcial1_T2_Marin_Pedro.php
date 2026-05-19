<?php
    //1-Crea una función recursiva que calcule la potencia de un número.
    function potencia($n, $exp){
        if ($exp == 0){
            return 1;
        }
        return $n * potencia($n, $exp -1);
    }
    echo "A potencia del 5 con sigo mismo es: " .potencia(5, 5). "<br>";

    /*----------------------------------------------------------------------- */
    /*2-Realiza una función recursiva que multiplique dos números enteros utilizando
    únicamente sumas.*/
    function multiply($n, $c){
        if ($c == 0){
            return 0;
        }
        return $n + multiply($n, $c - 1);
    }
    echo "La multiplicacion de 6 x 6 es: " . multiply(6, 6). "<br>";
    /*----------------------------------------------------------------------- */

    /*3-Crea una función recursiva que determine cuántos caracteres tiene una cadena de
    texto. */
    function contarTxt($texto, $i = 0){
        if (!isset($texto[$i])){
            return 0;
        }
        return 1 + contarTxt($texto, $i + 1);
        
    }
    echo "La cadena Aguila tiene: ". contarTxt("Aguila") . " letras<br>";
     /*----------------------------------------------------------------------- */

    /*4-Crea una función recursiva que determine si una palabra o frase es un palíndromo, es
    decir se lee igual al derecho y al revés. */
    function palindromo($texto, $i = 0, $j = null){
        $texto = strtolower(str_replace(' ','',$texto));
        if ($j === null){
            $j = contarLonguitud($texto) -1;
        }
        if ($i >= $j){
            return True;
        }
        if($texto[$i] != $texto[$j]){
            return false;
        }
        return palindromo($texto, $i + 1, $j - 1);
    }
        function contarLonguitud($texto, $i = 0){
            if(!isset($texto[$i])){
                return $i;
            }
            return contarLonguitud($texto, $i +1 );
        }
    echo "La palabra Reconocer: ". (palindromo("reconocer") ? "Es un palindromo":"No es un palindromo") . "<br>";
    /*----------------------------------------------------------------------- */

    /*5- Implementa el algoritmo de Euclides utilizando recursividad para calcular el MCD entre
    dos números. El algoritmo de Euclides, es un algoritmo eficiente utilizado para
    calcular el MCD de dos números enteros, basado en realizar divisiones sucesivas
    hasta obtener un residuo cero.  A = B * Q + R. Q = cociente R = residuo*/ 
    function mcd($num1, $num2){
        if ($num2 == 0){
            return abs($num1);
        }
        return mcd($num2, $num1 % $num2);
    }
    echo "El maximo comun divisor de 120 y 72 es " . mcd(120, 72) ."<br>";
    /*----------------------------------------------------------------------- */

    /*6- Crea una función recursiva que convierta un número decimal a binario. */
    function binario($n){
        if ($n == 0){
            return "";
        }
        return binario(intdiv($n, 2)) . ($n % 2);
    }
    echo "el numero binario de 35 es: " . binario(35) . "<br>";
    /*----------------------------------------------------------------------- */

    /*7- Realiza una función recursiva que sume todos los elementos de un arreglo. */
    function sumaArray($lista, $i = 0){
        if (!isset($lista[$i])){
            return 0;
        }
        return $lista[$i] + sumaArray($lista, $i +1);
    }
    $objeto = [1,5,9,7,5,3,6,5,4,8,5,2];
    echo "Lasuma total Sería: " . sumaArray($objeto) . "<br>";
    /*----------------------------------------------------------------------- */

    /*8 - Crea una función recursiva que determine si un elemento existe dentro de un arreglo. */
        function existe($list2, $search, $i = 0){
            if(!isset($list2[$i])){
                return false;
            }
            if($list2[$i] == $search){
                return True;
            }
            return existe($list2, $search,$i +1);
        }
        $nota = [7,8,98,5,86,5,82,1,5];
        echo existe($nota, 98) ? "El elemento fue encontrado<br>" : "El elemento no existe <br>";
    /*----------------------------------------------------------------------- */

    /*9 - Realiza una función recursiva que cuente cuántas vocales contiene una cadena de
    texto. */
        function vocales($lineaTxt, $i = 0){
            if (!isset($lineaTxt[$i])){
                return 0;
            }
            $c = strtolower($lineaTxt[$i]);
            $vocal = ($c == 'a'||$c == 'e'||$c == 'i'||$c == 'o'||$c == 'u')? 1 : 0;  
            return $vocal + vocales($lineaTxt, $i + 1);
        }
        $mensaje = "Parangaracutirimicuaro";
        echo "El texto " . $mensaje. " Tiene: ". vocales($mensaje)." vocales <br>";
     /*----------------------------------------------------------------------- */

     /*10.Crea una función recursiva que calcule la suma de todos los números pares desde 0
    hasta n. */
        function sumaPar($n){
            if($n == 0){
                return 0;
            }
            if ($n % 2 ==0){
                return $n + sumaPar($n - 2);
            }
            return sumaPar($n - 1);
        }
        echo "La suma de los numeros pares hasta 30 es: ". sumaPar(30);

    /*----------------------------------------------------------------------- */
?>  