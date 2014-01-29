Este documento contiene la información necesaria relativa a la nomenclatura de los ficheros y directorios en GitHub así como una serie de ejemplos para poder dar el formato adecuado a los capítulos del manual.

### Nomenclatura

Cada manual estará en un directorio que llevará por nombre "Código de producto-" + El texto que tú quieras:

>39930-Aquipongoloquequiera

Esto es así para que a la hora de enlazar el producto en la web la información mostrada sea correcta.

Dentro de cada directorio de producto encontrarás diferentes carpetas para los distintos idiomas del manual:
>ES - EN - FR - PT

Pero tú sólo tienes que trabajar en la carpeta ES. 

El nombre de cada fichero que crees, debe seguir el siguiente patrón: "CC-"+"Nombre_Capitulo"+".md"
>00-portada_manual.md"

El número de capítulo debe tener siempre dos cifras, poniendo un cero delante para los capítulos del 0 al 9. Los espacios se deben representar con "_" para evitar problemas en la transformación web del código. Es obligatorio poner la  extensión ".md" a los ficheros o el manual no se generará correctamente.

### Marcas especiales

Para que se pueda extraer una guía rápida del manual, es necesario que pongas marcas en el texto que quieres que aparezca en la guía. Concretamente, debes encerrar el texto de la guía rápida entre las siguientes marcas:
>
\<quick_quide> Este texto, va en la guía rápida\</quick_guide>

En caso de que haya algo que quieras que aparezca **únicamente** en la guia rápida y no en el manual online, debes encerrar ese texto entre las siguientes marcas:
>
\<unique> Este texto aparecerá sólo en la guía rápida</unique>

### Formato

Existen X elementos en los manuales que requieren que les des un formato especial, para facilitar su uso, los puedes encontrar a continuación:

#### Encabezados

Los títulos o encabezados se introducen con el caracter \# . Cuantas más veces aparezca, menor es la importancia del encabezado. En concreto, para los manuales utilizaremos:

> \#\# Título del capítulo  
>## Título del capítulo
\#\#\# Título de subapartado
### Título de subapartado

*Nota:* Se debe poner un espacio entre los símbolos de \# y el título.

#### Texto

Dentro del texto puede que necesites resaltar algunas partes como podría ser el nombre del producto. Para ello, puedes utilizar \* *Cursivas*\* y \*\* **Negrita**\*\*.

#### Imágenes

Para enlazar las imágenes del manual que el Dpto. de diseño realizará y subirá a la herramienta "Gestión de imágenes de los manuales" (http://energysistem/tools/manuals/) basta con que entrés a la herramienta y busques el producto que te interesa. Alli aparecerán todos los links a las imágenes, elige el que quieras e introdúcelo en el manual de la siguiente manera:

\!\[Imagen1](http://static.energysistem.com/images/manuals/39930/52d42d0e441fc.jpg)

#### Tablas

Quizá las tablas sean la parte más compleja, sin embargo no es habitual su uso en los manuales, puede que quieras utilizarla para tener texto al lado de una o varias imágenes como en el capítulo "Presentación general". Estas tablas constan de 3 partes: Encabezado de tabla, formato y contenido.

El encabezado y el formato siempre será igual en los manuales a menos que quieras introducir una tabla especial y tendrás que hacerlo de la siguiente manera:

|  |  |     - Encabezado de la tabla<br>
|:-------|:-------| - Tipo de tabla<br>
|Contenido col1|Contenido col2|

Esto produce el siguiente resultado:

|  |  |
|:-------|:-------|
|Contenido col1|Contenido col2|

Que una vez tratado por el intérprete HTML se convierte en una tabla sin bordes en la web. Se pueden poner tantas columnas como quieras, basta con añadir en cada apartado (encabezado, tipo, contenido) tantas "|" como columnas necesites.
