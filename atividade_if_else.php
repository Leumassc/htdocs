<html>
<head>
    <meta charset="UTF-8">
    <title>Atividade If Else</title>
    </head>

<body 
style = 
"font-family: sans-serif; 
position: absolute; 
left: 50%; 
top: 50%; 
transform: translate(-50%, -50%); 
background-color: #f0f0f0; 
padding: 20px; 
border-radius: 10px; 
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <H2 style = "font-family: Arial, sans-serif;">Doação de Sangue</H2>
    <br/>
    <h4 style = "font-family: sans-serif; margin-top: -5;">Verifique se você está apto a doar sangue</h4>
    
    <?php 

    $idade = 25;
    $peso = 60;

    if ($idade >= 16 && $idade <=69 && $peso >= 50){
        echo "Sua idade:" . $idade . " anos<br/>";
        echo "Seu peso:" . $peso . " kg<br/>";
        echo "Você está apto a doar sangue!";
    } else {
        echo "Sua idade:" . $idade . " anos<br/>";
        echo "Seu peso:" . $peso . " kg<br/>";
        echo "Você não está apto a doar sangue!";
    }
    

    ?>


</body>
</html>