<html>

    <head>
        <title>My PHP Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body style = "font-family: Arial, sans-serif; margin: 20px; background-color: #C0C0C0;">
    <H3 style = "font-family: Times New Roman, Times, serif; background-color: #E6E6FA; width: 250px; padding: 10px" >Operadores de comparação e lógicos</H3>
    <?php

    # Operadores de comparação

    
    # 2 == 2 // verdadeiro
    # 2 === 2 // verdadeiro
    # 2 === '2' // falso
    # 2 != 2 // falso
    # 2 !== 2 // falso
    # 2 !== '2' // verdadeiro
    # 2 > 3 // falso
    # 2 < 3 // verdadeiro




    if(2==='2'){
        echo 'Verdadeiro';
    }
    else{
        echo 'Falso';
    }



    //  ---------------------------------------------------------------------------------
    ?>
<br/>

    <hr/>

    <H3 style ="font-family: Times New Roman, Times, serif; background-color: #E6E6FA; width: 250px; padding: 10px; text-align: center;">Operadores lógicos</H3>

    <?php

    #Operadores lógicos
    // && (E) Ambás as condições devem ser verdadeiras
    // || (OU)  Se pelo menos uma das condições for verdadeira
    // ! (NÃO) Inverte o valor lógico da condição, tornando verdadeiro em falso e vice-versa
    // xor (OU exclusivo) se apenas uma das condições forem verdadeiras


    if (5==3 && 3>1){
        echo 'Verdadeiro';
    }
    else{
        echo 'Falso';
    }
    ?> 

<br/>

<hr/>

<H3 style ="font-family: Times New Roman, Times, serif; background-color: #E6E6FA; color: #800080; padding: 20px; margin-top: 40px; width: 240px; text-align: center;">Na Prática</H3> 
<br/>
<h4 style ="font-family: Times New Roman, Times, serif; background-color: #E6E6FA; margin-top: -5px; width: 250px; padding: 10px; text-align: center;"> Valor do Frete </h4>

<?php

// O cliente terá frete gratis se: possuir o cartão da loja e o valor da compra for superior a R$100,00

$valor_compra = 99;
$possui_cartao_loja = true;
$valor_frete = 50;

if ($valor_compra >= 100 && $possui_cartao_loja == true){
    echo 'Parabéns você possui frete grátis!';
}
else{
    echo 'Infelizmente você não atingiu os requisitos para obter o benefício de frete grátis!';
    echo "<br/> O valor do frete é R$ $valor_frete";
}

?> 


<br/>

<hr/>

<h4 style ="font-family: Times New Roman, Times, serif; background-color: #E6E6FA; width: 250px; padding: 10px; text-align: center;"> Condições Encadeadas </h4>

<?php 

#acima de 500 reais = frete gratis;
#acima de 150 reais = desconto no frete (frete parcial) R$15;
#abaixo de 150 reais = valor normal do frete R$50;
#para encadear um valor ternário usando o if/else é necessário isola-lo com parênteses, concatendo com o operador "." .

$valor_compra = 450;
$possui_cartao_loja = true;
$valor_frete = 50;
$frete_parcial = 15;

if ($valor_compra >= 500 && $possui_cartao_loja == true){
   
    echo "Possui cartão? " . ($possui_cartao_loja ? 'Sim' : 'Não');
    
    echo '<br> Parabéns você possui frete grátis!';
}

else if ($valor_compra >= 150 && $possui_cartao_loja == true){
    
    echo "Possui cartão? " . ($possui_cartao_loja ? 'Sim' : 'Não');
echo " <br> Parabéns você conseguiu desconto em seu frete! O valor do frete é R$ $frete_parcial";
}
else{

    echo "Possui cartão? " . ($possui_cartao_loja ? 'Sim' : 'Não');
    echo "<br/> Infelizmente, você não alcançou os requisitos para obter o benefício do frete grátis";
    echo "<br/> O valor do frete é R$ $valor_frete";
}



?>

    </body>


</html>