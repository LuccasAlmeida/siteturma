<?php
//requisitar arquvio php de outra pasta
require("../functions/funcoes.php");

$nome = $_POST["txtNome"] . "<br>";
$mes = $_POST["txtMes"] . "<br>";
$cpf = $_POST["txtCpf"] . "<br>";
$cep = $_POST["txtCep"] . "<br>";
$bai = $_POST["txtBai"] . "<br>";
$end = $_POST["txtEnd"] . "<br>";
$cid = $_POST["txtCid"] . "<br>";
$uf = $_POST["txtUf"] . "<br>";
$email = $_POST["txtEmail"] . "<br>";
$tel = $_POST["txtTel"] . "<br>";

// echo "Nome: " . $nome . "<br>";
// echo "Email: " . $email . "<br>";

 if (isset ($_POST ['txtNome'])) {
$tel    = $_POST ['txtTel'];
 $cep    = $_POST['txtCep'];

// echo "Cep: " . $cep . "<br>";
// }

date_default_timezone_set("America/Sao_Paulo")

$body = "====================================" .  "<br>";
$body = $body . "FALE CONOSCO - TESTE EXIBIÇÃO" . "<br>";
$body = $body . "====================================" .  "<br>";
$body = $body . "Nome: " .  $nome ;
$body = $body . "Email: " .  $email ;
$body = $body . "Telefone: " .  $tel ;

echo $body;

//Chamar a função dia_atual

    $dia = dia_atual();

    echo $dia . "<br>";

    $hora = date('H:i:s');
    echo $hora . "<br>";



if (($hora >= "00:00:00") && ($hora <= "11:59:59")) {
    echo "Bom dia !!";
}

elseif (($hora >= "12:00:00") && ($hora <= "17:59:59")) {
    echo "Bom Tarde !!";
}

else {
    echo "Boa Noite !!";
}

 }   
?>