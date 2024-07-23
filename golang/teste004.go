
/*
004 - A turma do colégio vai fazer uma excursão na serra e todos os alunos e monitores vão tomar um bondinho para subir até o pico de uma montanha.
A cabine do bondinho pode levar 50 pessoas no máximo, contando alunos e monitores, durante uma viagem até o pico.
Neste problema, dado como entrada o número de alunos 
𝐴
A e o número de monitores 
𝑀
M, você deve escrever um programa que diga se é possível ou não levar todos os alunos e monitores em apenas uma viagem!
*/
package main

import "fmt"

func main(){
	var alunos = 44;
	var monitores = 7;

	if((alunos + monitores) <= 50) {
		fmt.Println("Podem embarcar");
	} else {
		fmt.Println("Não pode embarcar, execede o limite máximo permitido");
	}
}

/*Executado em 0,198 seg*/

/*
OS: Debian GNU/Linux 12 (bookworm) x86_64 
CPU: Intel i5-6200U (4) @ 2.800GHz
Memory: 4049MiB / 11867MiB
go version go1.19.8 linux/amd64
*/