""""
004 - A turma do colégio vai fazer uma excursão na serra e todos os alunos e monitores vão tomar um bondinho para subir até o pico de uma montanha.
A cabine do bondinho pode levar 50 pessoas no máximo, contando alunos e monitores, durante uma viagem até o pico.
Neste problema, dado como entrada o número de alunos 
𝐴
A e o número de monitores 
𝑀
M, você deve escrever um programa que diga se é possível ou não levar todos os alunos e monitores em apenas uma viagem!
"""

alunos = 44

monitores = 5

if ((alunos + monitores) <= 50):
    print("Pode embarcar")
else :
    print('Não pode embarcar')


#Executado em 0,028 seg

"""
OS: Debian GNU/Linux 12 (bookworm) x86_64 
CPU: Intel i5-6200U (4) @ 2.800GHz
Memory: 4049MiB / 11867MiB
Python 3.11.2 (main, May  2 2024, 11:59:08) [GCC 12.2.0]
"""