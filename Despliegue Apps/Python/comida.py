# clases

class Comida:
    def __init__(self, tipo): # el constructor
        self.tipo = tipo

    def comer(self): # self es como this
        print(self.tipo)

    def __beber(self): # __nombre para hacer metodos privados
        print(self.tipo)

