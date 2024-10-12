/* XMLHttpequest, es un objeto que permite hacer peticiones
HTTP desde JavaScript sin necesidad de recargar la pagina.
En este caso, lo usaremos para cargar el archivo XML */

let xhr = new XMLHttpRequest();
xhr.open("GET", "productos.xml", true);

// xhr.onreadystatementchange: Se ejecuta a la vez que el estado de la solicitud se cambia
xhr.onreadystatechange = function(){
    // Cuando el estado es 4 la solicitud se acaba
    if (xhr.readyState == 4 && xhr.status == 200){
        // xhr. responseXML: tiene contenido del XML como objeto XMLDocument
        cargarProductos(xhr.responseXML);
    }
};
xhr.send();

/* Ahora esta es la Función que recibe el archivo XML y lo procesa */
function cargarProductos(xml){
    let productos = xml.getElementsByTagName("producto");
    let tabla = document.getElementById("tablaProductos").getElementsByTagName("tbody")[0];

    // Iterar sobre cada producto del archivo XML
    for (let i = 0; i < productos.length; i++){
        let nombre = productos[i].getElementsByTagName("nombre")[0].textContent;
        let precio = productos[i].getElementsByTagName("precio")[0].textContent;
        let categoria = productos[i].getElementsByTagName("categoria")[0].textContent;
    
        // Crear una fila nueva para cada producto
        let fila = tabla.insertRow();
        fila.insertCell(0).textContent = nombre;
        fila.insertCell(1).textContent = '$' + precio;
        fila.insertCell(2).textContent = categoria;
    }
}