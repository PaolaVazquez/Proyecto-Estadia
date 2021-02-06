$(buscar_datos);

function buscar_datos(consulta){
    $.ajax({
        url: 'buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta : consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })

}
$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor !=""){
        buscar_datos();
    }else{
        buscar_datos();
    }
});





/*const leads = [
    {}
]

const buscar = document.querySelector('#buscar');
const boton = document.querySelector('#caja_busqueda');

const filtrar = ()=>{
    //console.log(buscar.value);
    const texto = buscar.value.toLowerCase();
    for(let lead of leads){
        let 
    }
}
boton.addEventListener('click', filtrar);*/
