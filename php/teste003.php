<?php
/*#003 - Crie um programa que média escolar */

$aluno = "jonatha";

$n1 = 5;
$n2 = 5.5;
$n3 = 6.9;
$n4 = 8.5;

$media = (($n1+$n2+$n3+$n4)/4);

echo("O Aluno : $aluno, possui à média : $media \n");

if ($media >= 7.0) {
    echo("Aprovado!");
} else {
    echo("Reprovado!");
}