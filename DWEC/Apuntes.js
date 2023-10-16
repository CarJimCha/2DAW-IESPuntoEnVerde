// Comentario

/* 
    También un Comentario
*/

/*
// Primitivas

var cadena = "Hola";
console.log(typeof(cadena)); // string

var cadena2 = new String ("Hola");
console.log(typeof(cadena2)); // object

// JS permite usar métodos "temporalmente" sobre no-objeto
let tam = "Hola".length;
console.log(tam);
console.log(typeof(tam));  // number

// tam.tamanio=4;
// console.log(tam.tamanio);
*/

/*
// Mensaje aparece en el scope, pero se puede usar en el hola. Poner BP a inspeccionar.
// Probar metiendo el mensaje en la function

var mensaje = "Saludos!";
console.log(mensaje);

function saluda() {
    console.log(mensaje);
}

saluda();
*/

/*
// Ahora vemos el shadowing. Buscamos valores descendiendo por los contextos de ejecución de la pila.
 
var mensaje = "Saludos desde global!";
console.log(mensaje);

function saluda() {
    var mensaje = "Saludos desde local!"
    // var mensaje = "Saludos desde local por segunda vez!"
    console.log(mensaje);
}

saluda();

console.log(mensaje);
*/

/*
// Probamos dos cosas: "declarar" variables en plan cutre, y la memoria
// var prueba = "JEJEJE"

function saluda() {
    mensaje = "Saludos desde local!"
    console.log(mensaje);
    // console.log(prueba);
}

saluda();
*/

/*
// Ejemplo de pregunta test.

var cadena = "Hola!";
console.log(cadena);
{
    var cadena = "Paco";
    console.log(cadena);
}
console.log(cadena);
*/

/*
// Ahora con let

let cadena1 = "Hola!";
console.log(cadena1);
{
    let cadena1 = "Paco";
    console.log(cadena1);
}
console.log(cadena1);
*/

/*
// Peta por si mismo. Si fuera var, sin problemas.

let cadena2 = "Hey!";
let cadena2 = "Hola!"
*/

/*
var cad = "hola";
var cadcopiada = cad;
cad = "Hola don Pepito";
console.log(cad);
console.log(cadcopiada);
*/

/*
// Ahora trabajamos con listas

var lista = [0, 1, 2, 3];
console.log(lista);
var listacopiada = lista;
lista[0] = 7;
console.log(lista);
console.log(listacopiada);
*/

/*
// Slice => Para que se "cree" un objeto nuevo

var lista2 = [0, 1, 2, 3];
console.log(lista2);
var listacopiada = lista2.slice();
lista[0] = 7;
console.log(lista);
console.log(listacopiada);
*/

/*
let estado = "conectado";
console.log(`El usuario está ${estado}.`);
*/

/*
let sign = window.prompt("¿Cual es tu signo?");
// let sign = window.prompt("¿Cual es tu signo?","Sagitario"); // (pregunta, por defecto)
console.log(sign);
*/

// debugging