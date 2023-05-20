==================================
 Examen: POO con PHP
==================================

Vinculado al tema: https://www.apuntesinformaticafp.com/cursos/poo_con_php.html

Guía de evaluación (sobre 100 puntos)
=======================================

Primera Parte. POO Básica con PHP. 35 puntos
===============================================================

Crea una clase vehículos (*vehiculos.inc*) con:

#. Un constructor para crear el objeto
#. propiedades (matr y edad)
#. y los siguientes métodos

  #. ver(). Que muestra «El vehículo con matrícula $matr tiene una antigüedad de $edad años»
  #. actualizar_matricula(). Para cambiar el nombre del vehiculo
  #. ver_completo(). Para ver el contenido completo de la instancia

Crea una página web (*poo_basico.php*) que, usando la clase anterior::

  #. Cree dos objetos (v1 y v2)
  #. Muestre v1.ver() y v2.ver_completo().
  #. Actualice la matrícula de v2
  #. Muestre la matrícula de v2

Segunda Parte. Archivos Básico. 30 puntos
===========================================

Crear un archivo de texto cualquiera (*ejemplo.txt*) y lo dejas en el mismo directorio. Haz una página php (*archivos.php*) que realice las siguientes tareas

#. Muestra el nombre y ruta del archivo. 5p
#. Detecta si el archivo existe (si lo borro, dirá que no existe). 5p
#. Carga el archivo en una variable. 5p
#. Crea un array con 4 elementos y los escribes, línea a línea en el archivo. Sobreescribes lo que había. 5p
#. Lee la primera línea de un archivo csv de ejemplo, y crea un array con cada elemento (que va separado por comas). 5p

Tercera Parte (aplicación sencilla). 35 puntos
===================================================

Y para completar los últimos 35 puntos puedes **escoger uno de estos dos** (A o B):

A. Crea una página php (*robot.php* que cargue de una página web
   externa (por ejemplo https://www.apuntesinformaticafp.com/ o una
   que le pases por parámetro) como si fuera un recurso (archivo). La idea es filtrar el texto (como si fuera un robot de búsqueda)  y que puedas crear una página extrayendo la siguiente información:

   #. El texto de las etiquetas H1 
   #. El contenido de los elementos span donde el atributo class sea «caption-text»
   #. Los enlaces, desde esa página, a web externas (no enlaces internos)

B. Crea una aplicación php (*usuarios.php*) que gestione usuarios (con dni, nombre e email) utilizando el almacén de datos «usuarios.json». Permitirá ver:

   #. El listado completo de usuarios en el almacén
   #. Los datos de un usuario (con dni concreto)
   #. Puedes utilizar maquetación con rejilla (grid), que quizá es la más sencilla para mostrar los datos.