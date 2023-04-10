======================================================
Examen: Creación de Contenidos Multimedia
======================================================

Vinculado al tema: https://www.apuntesinformaticafp.com/cursos/creacion_multimedia.html

Guía de evaluación (sobre 100 puntos)
=======================================

Las subtareas, salvo que se diga lo contrario, tienen un valor de 5 puntos.

Prefiero que me envíes un archivo de texto con las respuestas y los comandos.

Edición Imágenes (p1.txt). 30p
------------------------------

Trabajas sobre la imagen https://commons.wikimedia.org/wiki/Commons:Picture_of_the_day#/media/File:M%C3%BCnster,_LBS_--_2021_--_9804.jpg .

#. Guárdala en formato webp.

convert imagen.jpg imagen.webp

#. Guárdala en jpeg pero al 25% de calidad.

convert imagen.jpg -quality 25 imagen_con_25.jpg

#. Recorta la imagen, 500 px por arriba y 500 px por la derecha.

convert imagen.jpg -crop +500+500 imagen_recortada.jpg

#. Rota la imagen 45% a la derecha. 

convert imagen.jpg -rotate 45 imagen_rotada.jpg

#. Añade una marca de agua (arriba a la izquierda) que diga "Foto Examen". 

convert imagen.jpg -pointsize 200 -draw "gravity northwest fill black text 10,10 'Foto Examen'" imagen_con_marca.jpg

#. Transforma la imagen con el filtro "implode". 

convert imagen.jpg -implode 0.5 imagen_imploded.jpg


Edición Audio (p2.txt). 30p
---------------------------

Trabajas sobre el audio *sample4.mp3* disponible en https://filesamples.com/formats/mp3

#. ¿Cuánto dura?

ffprobe -i sample4.mp3 -show_entries format=duration -v quiet -of csv="p=0"

#. ¿Qué codificación utiliza?

ffprobe -i sample4.mp3 -show_entries stream=codec_name -v quiet -of csv="p=0"

#. ¿Cual es su bitrate?

ffprobe -i sample4.mp3 -show_entries format=bit_rate -v quiet -of csv="p=0"

#. Guárdalo en formato opus

ffmpeg -i sample4.mp3 -c:a libopus -b:a 128k sample4.opus

#. Recorta su duración a la mitad

ffmpeg -i sample4.mp3 -ss 00:00:00 -t 00:02:00 -c copy sample4_recortado.mp3

#. Dividelo en 4 partes iguales.

ffmpeg -i sample4.mp3 -vn -c copy -segment_time 00:01:05 -f segment sample4_parte%d.mp3

Edición Video (p3.txt). 30 p
----------------------------

Trabajas sobre el audio *sample_640x360.avi* disponible en https://filesamples.com/formats/avi

#. ¿Cuánto dura el video y cuántos flujos de audio y video tiene?

ffprobe -i sample.avi -show_entries format=duration:stream=codec_type -v quiet -of csv="p=0"

#. Codifícalo en webm

ffmpeg -i sample.avi -c:v libvpx -crf 10 -b:v 1M -c:a libvorbis -q:a 5 sample.webm

#. Extrae sólo el audio del video

ffmpeg -i sample.avi -vn -c:a copy sample_audio.mp3

#. Recorta la duración del video a la mitad

ffmpeg -i sample.avi -ss 00:00:00 -t 00:00:06 -c:v copy -c:a copy sample_recortado.avi

#. Cambia la resolución de imagen del video

ffmpeg -i sample.avi -vf scale=640:-1 -c:v libx264 -crf 23 -c:a copy sample_resolucion.mp4

#. Extrae 8 fotogramas de muestra del video

ffmpeg -i sample.avi -vf "select='eq(n,0)+eq(n,50)+eq(n,100)+eq(n,150)+eq(n,200)+eq(n,250)+eq(n,300)+eq(n,350)'" -vsync vfr -q:v 2 -an sample_fotogramas%d.jpg

Licencias de Uso. 10p
---------------------

#. Explica en tus propias palabras qué sería una licencia CC BY NC

La licencia CC BY-NC permite compartir y modificar una obra con la condición de dar crédito al autor original y no usarla para obtener ganancias.

#. Explica en tus propias palabras qué sería una licencia CC SA NC

La licencia CC BY-SA-NC permite compartir y adaptar una obra, siempre y cuando se atribuya la autoría original, se comparta bajo la misma licencia y no se use con fines comerciales.