<!-- Atividade 1 -->
<?php

$nome = $_POST['txtNome'] ."<br>";
$email = $_POST['txtEmail'] ."<br>";
$fone = $_POST['txtTel'] ."<br>";
$endereco = $_POST['txtEndereco'] ."<br>";
$cidade = $_POST['txtCidade'] ."<br>";
$uf = $_POST['txtUf'] ."<br>";
$cep = $_POST['txtCep'] . "<br>";


// Se sim, atribuir os varias variaveis

    if (isset ($_POST["txtNome"])) {
    $fone = $_POST['txtTel'];
    $cep  = $_POST['txtCep'];
    }

    // Atribuir o resultado na variavel $body
$body = "==================================" . "<br>";
$body = $body . "FALE CONOSCO - TESTE EXIBIÇÃO" . "<br>";
$body = $body . "==================================" . "<br>";
$body = $body . "Nome: " . $nome . "<br>";
$body = $body . "Email: " . $email . "<br>";
$body = $body . "Telefone: " . $fone . "<br>";
$body = $body . "==================================" . "<br>";

// Apresentar o valor da variavel
echo $body;
?>





<!-- // Atividade 2
 -->