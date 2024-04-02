window.onload = (event) => {

//Variables necesarias
let totalNumero = 0;
let totalAlimentacion = 0;
let totalAlojamiento = 0;
const Ides = []; //Esta Array es para las id
let Contador = 1;

const provinciasContainer = document.getElementById('provinciasContainer'); //Aqui seleccionamos el provincias para crear el menu derecho

provincias.forEach(provincia => {
    
    //Creamos todos los elementos para el menu izquierdo, con la informacion de los objetos
    const nuevoDiv = document.createElement('div');

    const h2 = document.createElement('h2');
    h2.textContent = provincia.nombre;
    nuevoDiv.appendChild(h2);

    const img = document.createElement('img');
    img.src = provincia.imagen;
    img.alt = provincia.nombre;
    img.width = "200";
    nuevoDiv.appendChild(img);

    const pAlojamiento = document.createElement('p');
    pAlojamiento.textContent = `Coste alojamiento: ${provincia.coste_alojamiento} €`;
    nuevoDiv.appendChild(pAlojamiento);

    const pAlimentacion = document.createElement('p');
    pAlimentacion.textContent = `Coste alimentación: ${provincia.coste_alimentacion} €`;
    nuevoDiv.appendChild(pAlimentacion);

    const boton = document.createElement('button');
    boton.textContent = 'Añadir al carrito';
    nuevoDiv.appendChild(boton);

    boton.addEventListener('click', function() { //Le damos al boton un evento que haga una funcion para añadir toda la info a una lista
        AñadirCarro(nuevoDiv, provincia.nombre, provincia.coste_alojamiento, provincia.coste_alimentacion,provincia.id);
    });

    provinciasContainer.appendChild(nuevoDiv); //Y añadimos todos los elementos creados a DOM, esto lo hacemos hasta que nos quedemos sin objetos
});

function AñadirCarro(div, nombreProvincia, costeAlojamiento, costeAlimentacion,id) {
    

    if (!(Ides.includes(id))){ //Cada vez que le demos al boton de Añadir al carro comprobamos la array de Ides. 
    //Esta parte se activa no la id del objeto no esta en la array

        Ides.push(id); //metemos la id en el array
        
        const nuevoItem = document.createElement('li'); //Y creamos todos los elementos para el menu de la derecha con los datos que le hemos pasado a la funcion

        const pProvincia = document.createElement('p');
        pProvincia.textContent = `Provincia: ${nombreProvincia}`;
        nuevoItem.appendChild(pProvincia);
        
        Contador = 1;
        const dias = document.createElement('p');
        dias.textContent = `Dias: ${Contador}`; //El contador para los dias empieza en uno ya que no existia la ID en el array, lo que significa que es el primer dia
        dias.id = id; //Y claro, al p que estoy creando para los dias le ponemos una ID igual a la ID del objeto. Asi podremos manipularlo a futuro.
        nuevoItem.appendChild(dias);
        
        const pAlojamiento = document.createElement('p');
        pAlojamiento.textContent = `Coste alojamiento: ${costeAlojamiento} €`;
        nuevoItem.appendChild(pAlojamiento);
        
        const pAlimentacion = document.createElement('p');
        pAlimentacion.textContent = `Coste alimentación: ${costeAlimentacion} €`;
        nuevoItem.appendChild(pAlimentacion);
        
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        nuevoItem.appendChild(botonEliminar);
        
        const listaDesordenada = document.getElementById('carrito');
        listaDesordenada.appendChild(nuevoItem);
        
            botonEliminar.addEventListener('click', function() { //Le damos un evento click al boton de eliminarlo todo
                EliminarCarro(nuevoItem, costeAlojamiento, costeAlimentacion);
            });
        
        
            
            
            //Aqui sumamos los costes al menu de la izquierda. 
            totalNumero += costeAlojamiento + costeAlimentacion;
            totalAlojamiento += costeAlojamiento;
            totalAlimentacion += costeAlimentacion;
        //Y con esto de aqui abajo añadimos las variables que hemos obtenido arriba
            let total = document.getElementById('total');
            total.textContent = totalNumero;
        
            let Alimentacion = document.getElementById('Alimentacion');
            Alimentacion.textContent = totalAlimentacion;
        
            let Alojamiento = document.getElementById('Alojamiento');
            Alojamiento.textContent = totalAlojamiento;
        
        } else { //Si la ID ya esta en el array entonces hara lo siguiente
            Ides.push(id); //Añadira la ID a la array
            Contador = 0; //Pondra el contador a 0

            for(let i = 0; i <= Ides.length; i++ ){
                if (Ides[i] === id){
                    Contador++ //Y haremos un bucle que recorra la Array para saber cuantas veces esta el id del objeto
                }
            }


        let diasContenido = document.getElementById(id);
        diasContenido.textContent = 'Dias:'+Contador; //Gracias a saber cuantas veces esta el id del objeto podemos saber cuantos dias se va a quedar el cliente
                                                        //Debido a que es el mismo numero. Ademas, cambiamos el contenido del elemento con una ID igual al objeto, ya que cuando creamos el p le pusimos una id igual a su objeto. 
        totalNumero += costeAlojamiento + costeAlimentacion;
            totalAlojamiento += costeAlojamiento; //Se vuelve a sumar los costes y añadirlos. 
            totalAlimentacion += costeAlimentacion;
        
            let total = document.getElementById('total');
            total.textContent = totalNumero;
        
            let Alimentacion = document.getElementById('Alimentacion');
            Alimentacion.textContent = totalAlimentacion;
        
            let Alojamiento = document.getElementById('Alojamiento');
            Alojamiento.textContent = totalAlojamiento;
        }
        
        function EliminarCarro (nuevoItem, costeAlojamiento, costeAlimentacion) { //Esta funcion elimina todo el html del menu derecho y tambien los costes. 
            
            
            Contador = 0;

            for(let i = 0; i <= Ides.length; i++ ){
                if (Ides[i] === id){
                    Contador++  //Aparte de contar cuantas veces aparece el id en la array, este bucle tambien los elimina. Ya que el boton elimina TODO, tanto de la array como el DOM. 
                    delete(Ides[i])
                }
            }
            
            totalNumero -= (costeAlojamiento*Contador) + (costeAlimentacion*Contador); //Para eliminar los costes simplemete los multiplicamos por el numero de dias, o mejor dicho, la veces que aparece la ID en el array. 
            totalAlojamiento -= costeAlojamiento * Contador;
            totalAlimentacion -= costeAlimentacion * Contador;

            let total = document.getElementById('total'); //Y lo añadimos al menu de la derecha. 
            total.textContent = totalNumero;
        
            let Alimentacion = document.getElementById('Alimentacion');
            Alimentacion.textContent = totalAlimentacion;
        
            let Alojamiento = document.getElementById('Alojamiento');
            Alojamiento.textContent = totalAlojamiento;
        
            nuevoItem.remove(); //Ademas de por supuesto quitar el HTML. 
        }

    }

    

}



