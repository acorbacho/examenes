=========================================
Examen: Web APIs
=========================================

Primera Parte. Web API DOM y Eventos. 30 puntos.
================================================

Crea una aplicación (**p1.html**) que simule una lista de tareas sencilla, con los siguientes requerimientos (5 p por requerimiento):

#. Un campo en el que introduces una tarea a realizar. Máximo 100 caracteres. Sólo letras, números o símbolos básicos
#. Tendrá un botón con el que añadirás la tarea a la lista
#. Debajo del campo y en un bloque de texto diferente, se irá construyendo la lista de tareas, una por línea
#. Cada elemento de la lista tendrá un botón de «Terminado» que, una vez pulsado, tacha el elemento de la lista
#. Al llegar a 10 elementos de la lista, avisará de que ya tienes 10 elementos en la lista (estén terminados o no).
#. Y no te deja añadir más.

Segunda Parte. Web API del sistema. 30 puntos
===============================================

Crea una pequeña aplicación (**p2.html**) que, cuando la visite un usuario, te diga:

#. ¿Cual es la UAS (agente de usuario)?
#. ¿Cual es el sistema operativo del usuario?
#. ¿Qué versión de navegador está utilizando (o renderizado HTML)?
#. ¿Qué tamaño de memoria tiene el equipo?
#. ¿Qué lenguaje es el predeterminado del usuario?
#. ¿Estás cargando la página online o local (sin conexión)?
#. ¿Se pueden mostrar documentos PDF?
#. ¿Qué porcentaje de batería tiene su sistema?
#. Si está cargando (o no)
#. Que no cargue la página, si está por debajo del 25%

Tercera Parte. Usar varias APIs en una aplicación. 40 puntos.
=============================================================

Crea una pequeña aplicación web (**p3.html**) con los siguientes requisitos:

#. Tiene un botón que se llama «Estimar mi posición». Al pulsarlo …

   #. Te dice cuales son tus coordenadas y altitud
   #. Te dice el grado de precisión de la estimación
   #. Te muestra un enlace a un mapa

#. Además, diseñas otro botón «Sígueme» que:
   
   #. Captura tu posición cada 10 segundos
   #. Muestra las coordenadas, altitud y precisión
   #. Muestra la fecha y hora. Puedes usar el formato estándar o darle algún formato
   #. Y va añadiendo el histórico en una lista numerada

#. Y por último, vas añadiendo el histórico usando la Web API Storage para que

   #. Se guarde el histórico, y lo muestre cuando se vuelva a conectar
   #. Cada recorrido lo guarda en un bloque de texto diferente (varios divs). Es decir, cada recorrido tiene un histórico de posiciones. 
