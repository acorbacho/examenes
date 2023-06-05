==================================================
Examen: Acceso a Datos en PHP con SQL
==================================================

Vinculado al tema: https://www.apuntesinformaticafp.com/cursos/php_sql.html

Guía de evaluación (sobre 100 puntos)
=======================================

El almacén de datos (modelo.sq y datos.sql). 30p
===========================================

Diseña un almacén de datos, que se llamará viajes, que te permita gestionar y acceder a los datos de una aplicación de gestión de viajes sencilla. Se cumplirán los siguientes requisitos:

#. Necesitamos conocer la información de los viajeros y los vuelos que hacen.
#. Los viajeros son españoles o con residencia en España, y queremos saber el día que nacen para saber cual es su edad y felicitarle el cumpleaños. Un viajero puede hacer muchos viajes
#. De los viajes queremos conocer de qué ciudad es el origen y cual es el destino, y claro la fecha (de salida y llegada). Ah! Y de cada ciudad queremos saber cuantos habitantes tiene y una descripción sencilla de 150 caracteres máximo con un recomendación de cosas para ver.

 Ideal si subes una imagen del diseño lógico, pero en principio lo que necesito son dos archivos:

 #. El diseño físico en SQL (*modelo.sql*). Ideal en Postgresql, pero me da igual el SGBDR (mysql, maribd, sqlite, ...)
 #. Un conjunto de datos de prueba, en sql(*datos.sql*): 4 registros de ejemplo en cada tabla de tu BD

Consultar la BD (stats.php). 30p
================================

Desarrolla la página web stats.php que:

#. Muestra todos los viajeros registrados
#. Muestra todos los viajes registrados
#. ¿Cuántos viajeros registrados hay?
#. ¿Cuántos viajes registrados hay?
#. ¿Quien es el viajero de menor edad?
#. ¿Cuántos viajes, según el origen de datos, hay?

Siempre usando PDO. 
   
Modificar la BD. 30p
====================

Completas la aplicación web 

#. Añadir viajeros, viajes y ciudades. Depende cómo sea tu modelo de datos (ojo a las FK)
#. Actualizar los datos de un usuario
#. Borrar un registro en cada una de las tablas que tengas


Patrón de Diseño. 10p
=====================

Puntúo si usas algún tipo de patrón de diseño y que el código de la aplicación esté bien hecho y permita ampliar la funcionalidad. Por ejemplo si veo:
- Modularidad (o sea no repetir las cosas varias veces)
- POO para simplificar el código
- Etiquetas php o alguna manera de separar bien la presentación, de la programación, de la capa de datos.