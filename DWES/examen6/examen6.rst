==================================================
Examen: Servicios Web con PHP
==================================================

Vinculado al tema: https://www.apuntesinformaticafp.com/cursos/apis_php.html

Guía de evaluación (sobre 100 puntos)
=======================================

Consumo API Pública (20p)
===============================================================

Crea la aplicación PHP p1.php usando el API Chuck Norris Jokes (https://api.chucknorris.io/) que:

#. Me muestre un chiste aleatorio (chiste, la fecha de actualización y la categoría a la que pertenece).

#. Que me muestre una lista de todas las categorías disponibles. La lista tiene un url para mostrar un chiste de esa categoría en concreto

#. Y si quiero, que me muestre un chiste aleatorio, de una búsqueda por un texto concreto (por ejemplo «spain»)

Consumo API con Autenticación (20p)
===============================================================

Usa PHP para generar una aplicación web sencilla (php2.php) que usando el API OpenWeather (https://openweathermap.org/api/one-call-3) me muestre, para una ubicación previamente seleccionada:

#. El tiempo y humedad (hoy y el 15 de Julio del 2021)

#. Presión Atmosférica y porcentaje de nubosidad (hoy y el 15 de Julio del 2021)

#. Una descripción del tiempo en esa ubicación

Creación de API en PHP (60p)
======================

En cada problema pongo la puntuación. Los puedes dejar en un directorio api en el examen, con el nombre que propongo. 

#. Crear un API que devuelva un color aleatorio de una lista previa (en texto utilizable como valor de color CSS). Endpoint: /api/colores . Formato texto plano. 5p. 

#. Crear un API de refranes españoles . Devolverá un refrán aleatorio, en texto puro de entre 10 escogidos previamente. Endpoint: /api/refranes . Formato texto plano. 5p. 

#. Crear un API similar al anterior, pero que devuelva tres refranes en un objeto JSON, con un campo extra que diga el orden: primero, seguro y tercero. Endpoint /api/refranes-json . Formato JSON . 20p.

#. Crea un API que devuelva el número de caracteres de una cadena de texto. Endpoint /apis/contador. Formato texto plano. 10p. 

#. Crea un API que me devuelva el IMC de una persona (muy bien explicado aquí ). Endpoint /apis/imc/. Formato texto plano (tendrás que resolver cómo enviar los parámetros, hay diferentes opciones). Ideal en el url. 10p

#. Crea un API que reciba un JSON con nombre y apellidos y devuelva un texto con el nombre completo (nombre y apellidos). EndPoint: /apis/construir-nombre . Formato texto en crudo. Aquí el problema es usar POST y la información. 10p