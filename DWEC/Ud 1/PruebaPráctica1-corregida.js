// PRUEBA PRÁCTICA - Carlos Jiménez Chávez

// Pedimos los datos necesarios para la realización del ejercicio
// No es necesario comprobar los datos
const NOMBRE = prompt("Escriba su nombre:");
const AP1 = prompt("Escriba su primer apellido:");
const AP2 = prompt("Escriba su segundo apellido:");
const DNI = prompt("Escriba su DNI:");

// Creamos el usuario, nos hará falta más tarde 
let nombre1     = NOMBRE.substring(0,1);
let apellido1   = AP1.substring(0,3);
let apellido2   = AP2.substring(0,3);
let dniUser     = DNI.substring(0,2);
let usuario     = nombre1 + apellido1 + apellido2 + dniUser;


//Pedimos la contraseña
let pass = prompt("Escriba una contraseña, por favor:");

// Comprobamos la longitud de la contraseña
function longitud(){
    if (pass.length < 8) {
        alert("La contraseña contiene menos de 8 caracteres."); 
    }
}
longitud();

// Comprobamos si tiene todos los tipos de caracteres necesarios: letras
function letras(){
    if (!(/[a-z]+/gi.test(pass))){
        alert("La contrarseña no contiene letras.");
    }
}
letras();

// Comprobamos si tiene todos los tipos de caracteres necesarios: números
function numeros(){
    if (!(/\d+/gi.test(pass))) {
        alert("La contraseña no contiene al menos un número.");
    }
}
numeros();

// Comprobamos si tiene todos los tipos de caracteres necesarios: símbolos
function simbolos(){
    if (!(/[!"$%&´()"+,-.:;<=>?^_*{|}~]+/gi.test(pass))) {
        alert("La contraseña no contiene símbolos.");
    }
}
simbolos();

// Comprobamos las letras acentuadas
// No hace falta comprobar à o â, solo vocales acentuadas en castellano
function acentos(){
    if (/[áéíóúüÁÉÍÓÚÜ]+/gi.test(pass)){
        alert("La contraseña contiene una vocal acentuada.");
    }
}
acentos();

// Comprobamos si contiene una ñ o Ñ
if (/[ñÑ]+/gi.test(pass)){
    alert("La contraseña contiene una 'ñ'.")
}

// Condición simplificada: no usar palabras del nombre o el apellido
// Usamos el "toLowerCase" para no complicarnos con las mayúsculas o minúsculas
// Después de todo, no queremos que la contraseña de Carlos pase por escribir "car" en vez de "Car"
let passLC = pass.toLowerCase();

// Tres primeras letras del nombre
let nombreLC = NOMBRE.substring(0,3).toLowerCase();

// Tres últimas letras del apellido. Solo es necesario con el primero.
let ap1LC = AP1.substr(-3,3); // (-3,3) => Las tres últimas

// Tres caracteres centrales del nombre del usuario
let usuario3LC = usuario.substring(3,6).toLowerCase();

// Comprobaciones + Mensajes de error
if (passLC.includes(nombreLC)){
    alert("La contraseña incluye parte del nombre del usuario.");
}

if (passLC.includes(ap1LC)){
    alert("La contraseña incluye parte del apellido del usuario.");
}

if (pass.includes(usuario3LC)){
    alert("La contraseña incluye parte del nombre de usuario.");
}


// Comprobamos ahora si la contraseña incluye alguno de los cuatro segmentos del DNI
// Aquí no aplicamos el "toLoweCase" porque ASUMIMOS que van a ser números
// La comprobación no era necesaria, así que la damos por hecha
let dni1 = DNI.substring(0,2);
let dni2 = DNI.substring(2,4);
let dni3 = DNI.substring(4,6);
let dni4 = DNI.substring(6,8);

// Comprobación + Mensaje de error
if (pass.includes(dni1) || pass.includes(dni2) || pass.includes(dni3) || pass.includes(dni4)){
    alert("La contraseña contiene parte del DNI.");
}


