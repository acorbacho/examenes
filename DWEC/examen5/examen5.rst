=========================================
Examen: Programación Funcional con JS .
=========================================

Primera Parte. Lo básico. 35 puntos.
==================================================

En la librería *primera_parte.js*

#. Define la función suma(n,m), que me devuelva la suma de esos dos números. 3p
#. Defínela como función anónima y la asignas a la variable f1 y a la variable f2. ¿Qué valor da f1(3,4)? ¿Y f2(8,7)? 7p
#. Crea una función calculadora(param1, param2, operación) donde operación será la función para operar los dos parámetros. Podrá ser una de estas tres funciones: suma, resta, multi (sobre dos parámetros). 15 p
#. Usa funciones flecha en el ejemplo de la calculadora de la sesión anterior. 10p

Segunda Parte. Funciones Alto Nivel. Son 35 puntos
===============================================

En la librería *segunda_parte.js*. Supongamos que tenemos el array a = [9,17, 29, 13, 25, 52]. Resuelve los siguientes problemas:

#. Devuelve un array con los mismos elementos de a pero multiplicados por 2. 5p
#. Devuelve un array con los mismos elementos de a pero aplicandole la función f1. La función f1 le suma 4 al argumento de entrada. 10p
#. Devuelve un array con los valores menores de 20. 10p
#. Devuelve la suma de todos los números del array pero añadiendole 100. Es decir, no empieza en cero. 10p


Tercera Parte. Aplicación a Escoger
===================================

La idea es resolver estos problemas usando el paradigma funcional en JavaScript.

A. *dados.js*. Juego de los dados.

   Crear un programa que simule un juego en el que se lanzan dos dados. Ganará el número más pequeño.

B. *juego.js* . Juego con personajes

   Tengo un juego con varios personajes que se pueden atacar con diferentes armas

   Atacar es la función principal (o método de un objeto personaje) y usan diferentes armas (que en realidad son funciones)

   Y podrías añadir diferentes armas (y formas de atacar) sin modificar (mucho) la estructura principal
