<?php

//iniciar uma session

session_start();

//se a session não existir, será criada

if (empty($_SESSION['lista'])){
    $_SESSION['lista'] = [];
}

function listar(){
    // echo "Espelho de array - Aprensntação didática <br>";
    // echo "====================================". "<br>";
    // print_r($_SESSION['lista']);

    // $qtderegistros = count($_SESSION['lista']);
    // echo "Quantidade de registros no Array = ". $qtderegistros;
    // echo "<br><br>";
    
    echo "Tabela com dados <br>";
    echo "==============================================================================". "<br>";
    echo "<br>";

    $tabela = "<table border='1'>
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CEP</th>
                        <th>ENDEREÇO</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>UF</th>
                        <th>EMAIL</th>
                        <th>TELEFONE</th>
                    </tr>
                </thead>
                <tbody>";

$retorno = $tabela;

foreach ($_SESSION['lista'] as $linhadoarray){

    $retorno .= "<tr>";
    foreach ($linhadoarray as $coluna=>$counteudodacoluna) {
        $retorno .="<td>" .$counteudodacoluna . "</td>";
    }
    $retorno .= "</tr>";
}

$retorno .= "</tbody></table>";
return $retorno;


}


?>

