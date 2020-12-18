const buscar = document.querySelector('#buscar');
const boton = document.querySelector('#caja_busqueda');

const filtrar = ()=>{
    console.log(buscar.value);
}
boton.addEventListener('click', filtrar);
