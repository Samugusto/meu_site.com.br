<?php
    $resposta = "sim";
    $pergunta ="sua mãe deixou você ir ao Macdonald's?";

    if($resposta == "sim"){
    echo "o rolê esta activity == online (on)";
    }else{
        echo "hoje não terá rolê :( ";
    }

    echo "<br>";

    $numero1 = 100;
    $numero2 = 100;
    if ($numero1>$numero2){
    echo "o ". $numero1. " é maior que o ". $numero2;
    }
    if ($numero1<$numero2){
    echo "o ". $numero1. " é menor que o ". $numero2;
    }
    if($numero1 == $numero2){
    echo "o número" .$numero1. " e " .$numero2. " são iguais";
    }
?>