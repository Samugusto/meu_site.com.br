<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "1234") {
        header("Location: painel.php");
        exit;
    } else {
        $msg = urlencode("usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }
}
?>