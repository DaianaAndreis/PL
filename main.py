numero1 = int(input("Digita el primer numero: "))
x = input("Digita el operador: ")
numero2 = int(input("Digita el segundo numero: "))


if x == "+":
    resultado = numero1 + numero2
elif x == "-":
    resultado = numero1 - numero2
elif x == "*":
    resultado = numero1 * numero2
elif x == "/":
    resultado = numero1 / numero2

print(resultado)
