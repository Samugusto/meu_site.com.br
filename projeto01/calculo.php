<?php
if (isset($_POST['nota'])) {
    $nota = floatval($_POST['nota']);

    if ($nota >= 7) {
        echo "Aprovado";
    } elseif ($nota >= 5) {
        echo "Recuperação";
    } else {
        echo "Reprovado";
    }
}
?>
