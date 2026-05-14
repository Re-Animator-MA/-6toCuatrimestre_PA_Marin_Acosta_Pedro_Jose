<?php
    //Ejemplo 1. - Factorial con funcion recursiva
    /*
    la recursividad en un lenguaje coloquiel es cuando una funcion se llama
    asi misma. En un lenguaje mas tecnico, esta es una tecnica
    de programacion en la que una funcion se llama asi misnma 
    dentro de su propia definicion para resolver un problerma 
    */

    function factorial($n){       /*definir funcion llamada factorial que recibe un parametro
                                    $n en este caso sera un numero enterp */
    //caso base
        if ($n == 0 || $n == 1){/*si $n es igual a 0 o 1, el valor factorial
        es 1, ya que 0! y 1! sin ambos iguales a 1  */
            return 1;//retorno el valor 1
        }
        //llamadas recursivas
        return $n * factorial($n-1);/*Si $n es mayor que 1, se realiza una llamada recursiva
        a la funcion factorial, en la que multiplicaremos $n por el
        resultado de factorial($n-1) */
        //nota: esta llamada recursiva se repetira hasta que $n=1 o $n=0
    }
    //llamamos a la funcion recursuva
    echo "El factorial de 5 es: ". factorial(5);
    /*Internamente  la funcion se ejecutara de la siguiente manera:
    factorial(5) -> 5*factorial(4)
    factorial(4) -> 5*factorial(3)
    factorial(3) -> 5*factorial(2)
    factorial(2) -> 5*factorial(1)
    factorial(1) -> (caso base)
    */
    echo "<br>";
    //ejemplo 2. - suma losmprimeros n numeros naturales
    function suma($n){
        if($n == 0){  /*$n = 0 es mi caso base ya que la suma de los primeros numeros 
                              0 numeros naturales es 0*/
            return 0;
        }
        //llamada recursiva
        return $n + suma($n - 1); /*si $n es mayor que 0, se realizara una llamada recursiva
                                    a la funcion suma en la que  sumaremos $n al resultado de 
                                    suma($n - 1) */
    } 
    echo "la suma de los primeros 5 numeros naturales es: ". suma(5)."<br>";

    //Ejemplo 3. - Contador regresivo
    function contador($n){
        if($n < 0){
            return;     /*caso base: si $n es menor que 0, se detienen las llamdas recursivas y se retoma sin 
                        hacer nada */
        }
        //llamada recursiva
        return contador($n - 1) . $n . "<br>"; /*Si $n es mayor o igual a 0, se realizara una llamada
                                                recursiva a la funcion contador, en la que concatenamos
                                                el valor de $n al resultado de contador($n - 1),
                                                y un <br> para separar los numeros*/
        //llamamos a la funcion recursiva
        echo "contador desde 20: <br>". contador(20);
    }
        //Ejemplo 4 .- Fibonacci ------------------- 12/5/2026
        
        $ant = 0;
        $sig = 1;
        $act = 10;
        for($i = 0; $i < $act; $i++){
            echo "numeros fibinacci: " .$ant . " " . "<br>";
            $next = $ant + $sig;
            $ant = $sig;
            $sig = $next;
        }
        
        //Ejemplo 5 invertir una cadena de texto 
        $texto = "Sancho";
        $invert = "";
        $length = strlen($texto);

        for ($i = $length -1; $i >= 0; $i-- ){
            $invert .= $texto[$i];
        }
        echo "La forma invertida es: ". $invert . "<br>";

        //muestra recursiba del ejemplo 4 ---------------------------13/5/2026------------------------
        function fibonacci($n){
            if($n == 0){
                return 0; //si $n es igual a 0, el valor de fibonacci es 0, ya que el primer numero 
                          //de la secuencia por cual se toma como el caso base.
            }
            if($n == 1){
                return 1;   /*Ademas del 0, el segundo numero de la secuencia es 1, por lo cual tambien
                            se tomara como caso base y se retornara el valor 1 */
            }
            //llamada recursiva
            return fibonacci($n - 1) + fibonacci($n - 2); /*Si $n es mayor que 1, se realiza una llamada
            recursiva, en la cual sumaremos el resultado de fibonacci($n - 1) y fibonacci($n - 2)*/
        }
        //llamamos la funcion recursiva
        echo "El nunmero de fibonacci en la posicion 5 es: ". fibonacci(5). "<br>";
        /*
        La funcion internamente hace en la pila de llamdas recursivas es:
        *fibonacci(5) -> fibonacci(4) + fibonacci(3) -> 3+2=5
        *fibonacci(4) -> fibonacci(3) + fibonacci(2) -> 2+1=3
        *fibonacci(3) -> fibonacci(2) + fibonacci(1) -> 1+1=2
        *fibonacci(2) -> fibonacci(1) + fibonacci(0) -> 1+0=1
        *fibonacci(1) -> 1
        *fibonacci(0) -> 0
        --------------------------------------------------- Muestra recursiva Ejemplo 4.*/
        //muestra recursiva ejemplo 5------------------------------------------------- 
        function invertirCadena($cadena){
            if(strlen($cadena) == 0){
                return "";            /*El caso base es cuando la longitud de la cadena es 0, porque
                                        no hay nada que invertir por lo cual se retorna cadena vacia */
            }
            //llamada recursiva
            return invertirCadena(substr($cadena, 1)) . $cadena[0]; /* Si la longitud de la cadena es mayor
            que 0, llamamos recursivamente a nuestra funcion apoyandonos del metodo substr el cual nos permite
            obtener una parte de la cadena, en este caso obtendremos la cadena sin el primer caracter y 
            concatenamos el caracter en la posicion 0 (El primer caracter) */
        }
        echo "Invertir palabra: " . invertirCadena("Hola"). "<br>";
        /**
         * invertirCadena("Hola") -> invertirCadena("ola"). "H"
         * invertirCadena("la") -> "o"."H"
         * invertirCadena("a") -> "l"."o"."H"
         * invertirCadena("") => "a"."l"."o"."H"
         */
        //Ejemplo 6. - Suma de los digitos de un numero entero ------> 13/5/2026
        function sumadDigitos($n){
            if($n == 0){
                return 0;   /*El caso base es $n = 0, ya que la suma de los digitos de 0 es 0,
                              por lo cual retornamos el valoe de 0.  */
            }
            return ($n % 10) + sumadDigitos(intval($n / 10)); /*Si $n es mayor que 0, se realizara
            una llamada recursiva a la funcion sumaDigitos, en el cual sumamos el modolo de $n entre 10,
            (Que siempre nmos dara como resultado el ultimo digito de $n) al resultado de 
            sumaDigitos(intval($n/10)) esto lo que hace es eliminar la parte decimal */
        }
        echo "La suma de los digitos delnumero 1234 es: " . sumadDigitos(1234) ."<br>";
        /**
         * sumaDigitos (1234) -> (1234 % 10) + sumadiDigitos(123)
         * sumaDigitos (123) -> (123 % 10) + sumadiDigitos(12)
         * sumaDigitos (12) -> (12 % 10) + sumadiDigitos(1)
         * sumaDigitos (1) -> (1 % 10) + sumadiDigitos(0)
         * sumaDigitos (0) -> caso base
         */
?>