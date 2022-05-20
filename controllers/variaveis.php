
<?php

//verificar se existe valor na passagem do parâmetro
if( isset($_GET["cor"]) ) {



    //declaração de variaveis

    $nome;
    $idade;

    //parâmetro sempre no topo da pagina

    $cor = $_GET["cor"]; 


    //atribuir valor para uma variavel
    //popular a variavel

    //variavel nome que recebe

    $nome="Eduarda";


    //apresentar o valor da variavel na tela
    echo $nome;

    //pular linha

    ?><br><br>

    <?php
    //concatenar - juntar valores

    echo"Olá $nome";    

    //com "" quer dizer que é texto

    //por <br> dentro de "" - ex: echo $a . "<br>";



    ?><br><br>

    <?php

    $idade = 19;

    echo $idade;

    ?><br>

    <?php

    $a = $idade + 19;

    echo $a;

    ?><br>

    <?php

    $b = "2";
    echo $b;

    ?><br>

    <?php
    $c = $b + $a;
    echo $c;
    ?><br>

    <?php

    echo "A cor escolhida foi =>" .$cor;

    }

    ?>



