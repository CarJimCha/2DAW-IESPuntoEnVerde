/*
¿Qué saldrá en consola al ejecutar estas líneas de código?
*/

let ejemplo = "Yo no soy marinero";
console.log(ejemplo);
{
    let ejemplo = "Soy un delfín";
    console.log(ejemplo);
}
console.log(ejemplo);

/*
1. Yo no soy marinero
Soy un delfín
Soy un delfín

2. Yo no soy marinero
Soy un delfín
Yo no soy marinero

3.Yo no soy marinero
Yo no soy marinero
Yo no soy marinero

4. Saldrá un error, porque ha definido dos veces la misma variable
*/


/*
La respuesta correcta es la 2, pues la segunda vez que define el ejemplo es en otro scope.
La primera respuesta sería la correcta si ejemplo estuviera definido como var, la tercera respuesta no tiene sentido y la cuarta no es cierta por haber usado el let por segunda vez entre llaves.
*/



/*
¿Qué lista aparecerá en consola al ejecutar estas líneas de código?
*/

var lista = [1, 2, 3];
var listaCopiada = lista.slice();
lista[1] = 7;
console.log(listaCopiada);

/*
1. [1, 2, 3]
2. [7, 2, 3]
3. [1, 2, 3, 4, 5, 6, 7]
4. [1, 7, 3]
*/

/*
La respuesta correcta es la 1.
La respuesta 4 sería correcta de haber usado "var listaCopiada = lista;", la 2 sería .
*/