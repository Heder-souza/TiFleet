<?php


//PDO

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "gestao_ti";

try {
    $pdo = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//o ATTR_ERRMODE diz "o que vc vai fazer quando der erro" e o ERRMODE_EXCEPTION diz "irei parar se der erro" 
} catch (Exception $e) {//a gente adiciona a mensagem de erro do Exception para a variavel e
    echo "Erro: ".$e->getMessage();
}





