/*#003 - Crie um programa de média escolar */

package main

import "fmt"

func main() {
	var aluno = "Jonatha";

	var n1 = 9.0;
	var n2 = 8.0;
	var n3 = 5.5;
	var n4 = 7.0;

	var media = ((n1+n2+n3+n4)/4);

	fmt.Println("\n Aluno: ", aluno, "\n Sua média é: ", media, "\n");

	if (media >= 7.0){
		fmt.Println("Aprovado!");
	} else {
		fmt.Println("Reprovado!");
	}
}

/*Executado em 0,157 seg*/

/*
OS: Debian GNU/Linux 12 (bookworm) x86_64 
CPU: Intel i5-6200U (4) @ 2.800GHz
Memory: 4049MiB / 11867MiB
go version go1.19.8 linux/amd64
*/