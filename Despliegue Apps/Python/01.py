print("just monika XDD")

variable = 1

print("la variable tiene el valor: {variable}")

# si pones 'f' antes de una cadena, la procesa
print(f"la variable tiene el valor: {variable}")

# variables debil tipadas
variable = "mucho texto"
print(f"la variable tiene el valor: {variable}")

# range devuelve una lista de numeros enteros SIN INCLUIR EL ULTIMO
for i in range(2):
    print(i)

# puedes pasarle el numero que empieza, el que acaba, y la cantidad del paso (el i++)
for i in range(9,3, -1):
    print(i)


# en Python no hay corchetes, va por tabulaciones
print("fin del bucle")
print("   ")
print("   ")


# ARRAYS
lista = ["rojo","amarillo","verde","amarillo","negro"]
print(lista)
print("   ")

# como NO IMPRIMIR el ultimo o el primero
print(lista[:-1])
print(lista[:+2])

print(lista[-1:])
print(lista[+2:])

# en python se puede contar hacia delante y hacia atras
print(lista[0])
print(lista[-1])


print("   ")
print("   ")

# diccionarios, como los arrays con clave personalizada
diccionario = {
    "sey" : "gex",
    "pit" : "ulin"
}

print(diccionario)

print("   ")
print("   ")



# Clases (el archivo `comida.py`)
