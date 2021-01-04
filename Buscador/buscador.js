//Arreglo de donde se tomará los valores a buscar
const leads = [
  {name: 'Paola', apellido: 'Vázquez'},
  {name: 'Ricardo', apellido: 'Vázquez'},
  {name: 'Belen', apellido: 'Vázquez'},
  {name: 'Juan Pablo', apellido: 'Cuartas'},
  {name: 'Alfredo', apellido: 'Orozco'},
  {name: 'Sebastian', apellido: 'Castellanos'},
  {name: 'Carlos', apellido: 'Gónzalez'},
  {name: 'Veronica', apellido: 'Ramos'},
  {name: 'Octavio', apellido: 'Pérez'},
]

//detectamos lo que se escribe en el input
const buscador = document.querySelector('#buscador');
//detectamos el boton
const boton = document.querySelector('#boton');
//Guardamos lo del ul
const resultado = document.querySelector('#resultado');


//Cachamos lo que escribe el usuario
const filtrar = () =>{
  //console.log(buscador.value);
  //Lo iniciamos en 0
  resultado.innerHTML = '';
  //Guardamos el texto del usuario y se transforma en minusculas para que ambas consultas sean la misma
  const texto = buscador.value.toLowerCase();
  //recorremos el arreglo
  for (let lead of leads) {
    //Se guarda lo del arreglo en esta variable temporal
    let name = lead.name.toLowerCase();
    //Buscamos con IndexOf
    if (name.indexOf(texto) !== -1) {
      //si coincide
      resultado.innerHTML +=  `
        <li>${lead.name} - apellido: ${lead.apellido}</li>
        `
    }
  }
  //Si nada coincide aparecera este mensaje
  //Las comillas invertidas son con Alt + 96 Acento grave
  if (resultado.innerHTML === '') {
    resultado.innerHTML +=  `
      <li>Lead no encontrado...</li>
      `

  }
}

boton.addEventListener('click', filtrar);
//cada que el usuario teclee algo se buscará
buscador.addEventListener('keyup', filtrar);
//Lo dejamos inicializado
filtrar();
