<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <h1> Meu primeiro programa com PHP!</h1>
     <!--começando php-->
    <?php
    //imprimindo na tela - comentário
    echo "Olá Mundo";
    //variáveis
    $nome = "Jubileu";
    $idade = 50;
     //se idade for maior que 18 anos
    // estrutura de condiçao if(se) else(se não)
    if($idade > 18){
        echo " $nome Maior de 18 anos, com $idade anos";
    }else{
        echo " $nome Menor de 18 anos,com $idade anos";
    }    
    //estruturas de repetição - looping
    for( $num = 1;$num<= 5; $num++) {
        echo("<br> Contagem: $num");
    }

    //estrutura de repetição while
    $contador = 1;
    While($contador <=5){
        echo "<br> contagem2: $contador";
        $contador++; //contador = contador + 1

    }
    function saudacao($nome){
        echo " <br> Olá, $nome";
    }
    saudacao("Junior");
    $cores = array("vermelho","amarelo","azul");
    echo"<br> sem for: $cores[0]";
    echo"<br> sem for: $cores[1]";
    echo"<br> sem for: $cores[2]";

    for($n = 0; $n < count($cores);$n++){
        echo "<br com for: $cores[$n]";
    }


    ?>

     <!--terminando php -->
</body>
</html>