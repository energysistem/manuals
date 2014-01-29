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

El número de capítulo debe tener siempre dos cifras, poniendo un cero delante para los capítulos del 0 al 9. Los espacios se deben representar con "_" para evitar problemas en la transformación web del código. En caso de no poner la extensión ".md" el fichero se guardará pero no podrás previsualizar el resultado. 

### Formato

Existen X elementos en los manuales que requieren que les des un formato especial, para facilitar su uso, los puedes encontrar a continuación:

#### Encabezados

Los títulos o encabezados se introducen con el caracter \# . Cuantas más veces aparezca, menor es la importancia del encabezado. En concreto, para los manuales utilizaremos:


\#\# Título del capítulo
## Título del capítulo
\#\#\# Título de subapartado
### Título de subapartado

*Nota:* Se debe poner un espacio entre los símbolos de \# y el título.
