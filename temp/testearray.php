<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Teste Arrays</title>
</head>
<body>




    <?php
    echo "Teste de Array <br> <br>";

    //Atribuição de um Array

    $array_numeros = array(5,10,15,20,25);

    //com echo $array_numeros; nao fuciona

    echo "<br>";

    //array apresenta dados com print_r 
    print_r($array_numeros);

    echo "<br>";
    //Verificar a quantidade de itens
    $qtde = count($array_numeros);

    echo "<br>";

    echo "Quantidade de itens da coleção = " .$qtde;
    echo "<br> <br>";
    
    
    //Apresentar os dados utilizando estrutura de repetição
    //For
    //i - contador
    //$ = variavel
    //++ = acrescentar a cada soma
    //i = contador - se i for menor que a quantidade de itens ele faz a contage e ++ = acrescenta + 1 
    //abrir e fechar {}
    for($i=0; $i < $qtde; $i++){
        echo "Indice = " . $i . "  Valor = " . $array_numeros[$i] . "<br>";
    }

   echo "<br> <br>";

    //Foreach

    foreach($array_numeros as $i) {
        echo " Valor = " .  $i . "<br />";
        
    }

    echo "<br>";

    $salarios = array();
    $salarios["Claudia"] = 1000;
    $salarios["João"] = 7000;
    $salarios["Luiza"] = 12000;

    //foreach($salarios as $key_arr){
        //echo $key_arr . "<br />";
    //}
foreach($salarios as $key_arr => $var_arr) {
    echo $var_arr . " = " . $key_arr . "<br>";
}

//arrays multidimensional
    
 $Produtos = array(
    array("Maça",20,10),
    array("Banana",10,15),
    array("Laranja",15,7),
    array("Pera",20,5)
 );

//For dentro de outro For

for ($linha = 0; $linha < 4; $linha++){
    echo "<p><b>Linha Número : " . $linha. "</b></p>";
    echo "<ul>";
    for($coluna = 0; $coluna < 3; $coluna++){
        echo " <li> " . $Produtos[$linha][$coluna] . " </li> ";
    }


    echo "</ul>";
}

echo "<br>";

$idade = array("Marcos"=>"35","Suzana"=>"37","Joel"=>"43");

session_start();

//se a session não existir, será criada

if (empty($_SESSION['lista'])){
    $_SESSION['lista'] = [];
}

array_push($_SESSION['lista'],$idade);

$tabela = "<table border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                    </tr>
                </thead>
                <tbody>";

$retorno = $tabela;

foreach ($_SESSION['lista'] as $linhadoarray){

    $retorno .= "<tr>";



    $retorno .= "</tr>";
}

$retorno .= "</tbody></table>";
return $retorno;

    ?>
    
</body>
</html>