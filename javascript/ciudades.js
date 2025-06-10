
//Importamos objetos desde ciudades.js
import { barcelona, roma, paris, londres } from "base_ciudades.js"

//Capturamos los elementos del DOM<<Document Object Model>>:
//DOM es una representación estructurada de un documento HTML. Es como un árbol de nodos donde cada nodo es un elemento
let enlaces = document.querySelectorAll('.dropdown-link') //<<Consulta y obtiene todos los elementos con clase ciudades que son los enlaces de html y pasan a ser nodos.

let tituloElemento = document.getElementById('titulo') //<<Capturamos el elemento con id específico, en este caso id='titulo'
let subTituloElemento = document.getElementById('subtitulo')
let parrafoElemento = document.getElementById('parrafo')
let precioElemento = document.getElementById('precio')

//bucle que repasa todos los elementos de enlaces (que en este caso son nodos), uno por uno.
enlaces.forEach(function(enlace) { //cada vez entra un nodo a esta función.
    enlace.addEventListener('click', function() { //escucha cuando hacemos click en un nodo(<a>) y ejecuta la siguiente funcion:

        //Obtenemos claves-valor del objeto seleccionado o activo (enlace):
        let contenido = obtenerContenido(this.textContent) //llamamos a la funcion obtenerContenido declarada mas abajo y el valor que entra es this<<la variable que entró a la función>> .textContent que es el contenido textual del nodo: 'Barcelona', 'Roma', 'París' o 'Londres'.

        //Mostramos el contenido de dicho objeto en el DOM:

        //primero tituloElemento capturó el elemento con id='titulo'
        tituloElemento.innerHTML = contenido.titulo //Aqui técnicamente estamos diciendo roma.titulo en caso que se haya dado click al anchor <a> llamado 'Roma'.
        subTituloElemento.innerHTML = contenido.subtitulo //contenido es la variable donde hemos guardado el nodo al que dimos click que hace referencia a un objeto declarado en ciudades.js.
        parrafoElemento.innerHTML = contenido.parrafo //parrafosElemento es la variable donde guardamos el valor 'parrafo' que es un string y es a su vez un atributo o clave del objeto al que hace referencia la variable 'contenido'.
        precioElemento.innerHTML = contenido.precio
    })
});

//Funcion para traer la información correspondiente desde ciudades.js

//enlace(singular de enlaces) solo uno de los 4 nodos contenidos en 'enlaces' que al guardar nodos deja de ser una variable común y pasa a ser un iterador.
function obtenerContenido(enlace) {

    let contenido = { //objeto llamado contenido, se crea al ejecutar la funcion.
        'Barcelona': barcelona, //la clave toma el string dentro del nodo que corresponde a <a> y el valor es uno de los objetos que importamos en la primer linea de codigo.
        'Roma': roma, //el string debe estar escrito tal como en el DOM(el documento html)
        'París': paris,
        'Londres': londres
    }

    return contenido[enlace]; //<<Devuelve solamente aquel objeto que coincida con 'enlace'

}
