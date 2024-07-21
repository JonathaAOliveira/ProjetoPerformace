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

#Executado em 0,078 seg

/*
OS: Debian GNU/Linux 12 (bookworm) x86_64 
CPU: Intel i5-6200U (4) @ 2.800GHz
Memory: 4049MiB / 11867MiB
PHP 8.2.20 (cli) (built: Jun 17 2024 13:33:14) (NTS)
*/

#add

?>