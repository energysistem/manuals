# Guía Básica #

## Aprendiendo Markdown ##

**MarkdownPad** es un editor de Markdown para Windows

### Hay diferentes tipos de encabezados ###

#### Este es el más pequeño ####

Los dos encabezados principales se pueden poner de otra forma:

Encabezado principal
====================
Encabezado secundario
---------------------

Podemos usar 3 guiones para crear barras separadoras entre partes:

---

Aparte de los símbolos o los botones del menú superior también se pueden usar combinaciones de teclado para conseguir lo que deseamos.

Por ejemplo:

- **Bold** (`Ctrl+B`)
- *Italic* (`Ctrl+I`)
- Quotes (`Ctrl+Q`)
- Code blocks (`Ctrl+K`)
* Headings 1, 2, 3 (`Ctrl+1`, `Ctrl+2`, `Ctrl+3`)
* Lists (`Ctrl+U` and `Ctrl+Shift+O`)


Para la lista "normal" se puede usar el - o el * tal y como se ve arriba. También existe la lista numérica:

1. Uno. Es necesario poner el primer elemento de la lista con la forma "1."
1. Dos. Pero luego da igual si ponemos otra vez el "1."
* O ponemos simplemente un "*"
* Sabe continuar la lista :)

> Lleva diccionario integrado. En Tools->Options->Interface podemos elegir qué idioma queremos que nos revise.

Por supuesto se pueden poner links a [nuestra web](http://www.energysistem.com).

Se puede escribir código como el siguiente `var i = 0;`
O así:

	var j = 10;
O en varias líneas:

	for (var i in args) {
		console.log(args[i]);
	}


Esto es una prueba:

```block
var i = args.length;
while (args[--i]) {
	console.log(args[i];
}
```

![Texto alternativo](../basic-guide/images/logo_store.png "Logo de Energy")