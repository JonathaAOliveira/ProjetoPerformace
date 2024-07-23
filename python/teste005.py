"""
Crie um programa que recebe uma lista de números e calcule a média:
"""
#Criando um array
numeros = []

#Criando uma variavel que recebe o input para alimentar o array 
while True:
    try:
        numero = float(input("Digite um número: "))
        numeros.append(numero)
    except ValueError:
        print("Valor invalido, digite um número")
        continue
#Condicional para inserir ou para o sistema
    maisnumeros = input("Deseja inserir mais numeros? Digite: S (sim) ou N (não):  ").lower()
    if maisnumeros != "s":
        break
#Condicional em caso de não inserir dados
    if not numeros:
        print("Nenhum numero foi digitado")

#coleta dos valores e soma para média
m = sum(numeros) / len(numeros)
print(f"A média dos números digitados foi: {m:.2f}")


