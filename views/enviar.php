<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
        
<?php

require("../functions/funcoes.php");
require("../controllers/envio.php");

$array = [
    "nome"=>"{$nome}", 
    "cep"=>"{$cep}", 
    "endereço"=>"{$end}", 
    "bairro"=>"{$bai}",
    "cidade"=>"{$cid}",
    "uf"=>"{$uf}",
    "email"=>"{$email}",
    "telefone"=>"{$tel}"   
];
  


array_push($_SESSION['lista'],$array);

$exibirdados = listar();

echo $exibirdados;
   
        
?>

    
</body>
</html>