<?php
// Fazer conexão do backend com o banco de dados
$nomeServidor ="sql212.infinityfree.com" ; //localhost
$username = "if0_35249697"; //root
$senha = "g4ixuxe3p5"; //""
$nomeBanco = "if0_35249697_rede_banco"; 

//mysqli - driver responsável por conectar com o banco
$conexao = new mysqli($nomeServidor,$username,$senha,$nomeBanco);

//se a conexão falhar - die encerra execução e apresenta mensagem
if($conexao -> connect_error){
    die("conexão com o banco de dados falhou !".$conexao ->connect_error);
}


?>