def arbolNavidad(alturaArbol, anchuraArbol, alturaTronco, anchuraTronco):

    # estrella
    print(f"" + (" "* (alturaArbol -1)) + ("x") )


    # bucle de las ramas
    for i in range(1,alturaArbol):
        print(f"" + (" "* (alturaArbol - i -1)) + ("*"*(i*2+1)) )

    # bucle del tronco
    for i in range(alturaTronco):
        print(f"" + (" "* (anchuraArbol - anchuraTronco +1)) + ("*"*(anchuraTronco)) )



# arbolNavidad(5,5,2,3)

# arbolNavidad(7,7,1,3)
arbolNavidad(6,6,2,3)