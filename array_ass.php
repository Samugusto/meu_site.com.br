<?php
$aluno = ["nome" => "Joca", "idade" => 14, "nota" => 10];
echo "olá {$aluno ["nome"]} sua idade é {$aluno ["idade"]} e sua nota é  {$aluno ["nota"]} !";
$ano = 2025 - 14;
echo "<p> você nasceu em {$ano} </p>";
$agora = new datetime();
echo $agora->format('d-m-Y H:i:s');
echo "<p> hoje é dia nacional da CNH </p>"
?>