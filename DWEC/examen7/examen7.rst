=========================================
Examen: APIs Externas con JS
=========================================

Vinculado al tema https://www.apuntesinformaticafp.com/cursos/apis_externas_js.html


Consumo Básico de API. 20p
==========================

Usa JS para utilizar el API Chuck Norris Jokes y crear una pequeña aplicación web (p1.html) que:

#. Me muestre un chiste aleatorio (chiste, la fecha de actualización y la categoría a la que pertenece).
#. Que me muestre una lista de todas las categorías disponibles. La lista tiene un url para mostrar un chiste de esa categoría en concreto
#. Y  través de un campo de formulario, que me muestre un chiste
   aleatorio, de una búsqueda por un texto que escriba en ese campo

Integración de APIs. 40p
========================

Crea una aplicación que use dos APIs externas  (API Chuck Norris Jokes
y OpenWeather) pero integrado en una sola aplicación (p2.html). Los requisitos son los siguientes:

#. La información que se consume estará en componentes HTML separados,   aunque sea un solo documento.
  #. Uno con id «jokes»
  #. Otro con id «weather».

#. Le añadirás la información del estado HTTP (respuesta el API, y   alguna cabecera, por ejemplo la fecha), para saber leer el mensaje   de respuesta. Este mensaje irá en un componente que se podrá   mostrar/ocultar haciendo click con el ratón (para no ensuciar la interfaz)
#. Existirá un botón que, al pulsarlo, genere nueva información sobre un chiste aleatorio. Sería el mecanismo de control del primer API.
#. Cada 20 segundos, se actualizará la información del tiempo y se imprimirá la fecha y la hora de la última actualización. Sería el mecanismo de control del segundo API

Uso de API Unsplash. 30p
===================
   
Creas una aplicación que, usando el API de UnSplash (p3.html), tenga los siguientes requisitos:

#. Un cuadro de búsqueda.
#. Un selector para definir el número de imágenes
#. Al pulsar un botón, muestra las imágenes (en formato miniatura) que cumplan con ese criterio de búsqueda,
#. Al seleccionar una de las imágenes, se abre una página específica
   con los detalles de esa imagen.
#. Y genera tres enlaces a la imagen (a esta imagen pero con distinta resolución)