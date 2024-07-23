<?php

/*
004 - A turma do colégio vai fazer uma excursão na serra e todos os alunos e monitores vão tomar um bondinho para subir até o pico de uma montanha.
A cabine do bondinho pode levar 50 pessoas no máximo, contando alunos e monitores, durante uma viagem até o pico.
Neste problema, dado como entrada o número de alunos 
𝐴
A e o número de monitores 
𝑀
M, você deve escrever um programa que diga se é possível ou não levar todos os alunos e monitores em apenas uma viagem!
*/

$alunos = 43;

$monitores = 9;

if(($alunos + $monitores) <= 50){
    echo("Podem embarcar!");
} else {
    echo("Não podem embarcar, excede o número máximo de pessoas!");
}

#Executado em 0,034 seg

/*
OS: Debian GNU/Linux 12 (bookworm) x86_64 
CPU: Intel i5-6200U (4) @ 2.800GHz
Memory: 4049MiB / 11867MiB
PHP 8.2.20 (cli) (built: Jun 17 2024 13:33:14) (NTS)
*/


?>