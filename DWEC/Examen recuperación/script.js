let DOMitems;
let DOMtotal;
let DOMbotonVaciar;
let DOMtotales;
let filtroActual = '';
let bienesCP = bienes.slice();

document.addEventListener('DOMContentLoaded', () => {
    // Inicio
    renderBienes();
});

// Mostramos todos los productos del archivo JSON
function renderBienes() {

    DOMitems    = document.querySelector('#items');

    bienesCP.forEach(bien) => {

        // Estructura
        // Necesitamos un div con las clases card y col-sm-4
        const miNodo = document.createElement('div');
        miNodo.setAttribute('id', 'cuerpo');
        miNodo.classList.add('card', 'col-sm-4');


        // Faltan cosas aquí


        // Uso
        // Creamos un párrafo con la clase card-text y el texto del atrubuto current_usage
        const miNodoUso = document.createElement('p');
        miNodoUso.classList.add('card-text', ''); // Faltan cosas aquí
    }
}


    // Mostramos el precio total en el HTML
    //muestra


// Mostramos todos los productos guardados en el array carrito
function renderFiltros(){

    DOMtotales      = document.querySelector('#totales');
    //                = document.querySelector(''); 
}