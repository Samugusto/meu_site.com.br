<?php
//esta é uma função
//inicio da função saudação
    function saudacao($nome) {
        return "Olá, $nome!";
    }
//fim da função saudação


    function nomdaDafuncao($parametro1, $parametro2) {
        $resultado = $parametro1 + $parametro2;
        return $resultado;
    }
    $frase = saudacao("Maria");
    $soma = nomdaDafuncao(5, 10);
    echo "$frase,  resultado é: $soma";
?>