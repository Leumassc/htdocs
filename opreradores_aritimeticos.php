<html>
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
    </head>

<body>
    <?php

        $a = 10;
        $b = 5;
        echo "Soma: ". $a . " + ". $b . " = " . ($a + $b) . "<br>";
        echo "Subtração: ". $a . " - ". $b . " = " . ($a - $b) . "<br>";
        echo "Multiplicação: ". $a . " * ". $b . " = " . ($a * $b) . "<br>";
        echo "Divisão: ". $a . " / ". $b . " = " . ($a / $b) . "<br>";
        echo "Módulo: ". $a . " % ". $b . " = " . ($a % $b) . "<br>";
        echo "Exponenciação: ". $a . " ** ". $b . " = " . ($a ** $b) . "<br>";

    ?>

    <h3>Operadores de incremento e decremento</h3>

    <?php

        #Pós-incremento
        $a = 7;

        echo "Valor inicial de a é $a <br>";
        echo "Valor de a após o incremento é ". $a++ . "<br>";
        echo "Valor atual de a é $a <br> <br> <br> <br>";

        #Pré-incremento

        $a = 7;

        echo "Valor inicial de a é $a <br>";
        echo "Valor de a após o incremento é ". ++$a . "<br>";
        echo "Valor atual de a é $a <br>";

        #Pré-decremento e pós-decremento seguem a mesma lógica
    
    ?>
</body>
</html>