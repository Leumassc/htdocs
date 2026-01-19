<html>

    <head>
        <title>Switch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
    
    <?php

    $parametro = 'Samue';

    switch($parametro){
        case 1:
            echo 'Entrou no case 1';
            break;

            case 'Samuel':
                echo 'Entrou no case 2';
                break;

                case 3:
                    echo 'Entrou no case 3';
                    break;

        default:
            echo 'Nenhum case correspondeu';
            break;
    }

    ?>

   

    </body>


</html>