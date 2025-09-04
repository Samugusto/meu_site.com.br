<?php
$num = $_POST['num'];

function parouimpar($num) {
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

echo "O número $num é " . parouimpar($num) . ".";
?>
