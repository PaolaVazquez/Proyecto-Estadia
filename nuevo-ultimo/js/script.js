$(document).ready(function(){

Cookies.set("WebPage", "true", {expires: 2});

var myCookie = Cookies.get("WepPage");
var body = document.querySelector('body');

if (myCookie){
   body.classList.add("cookie");
}

if(myCookie = 'false'){
    body.classList.remove("cookie")
}


//SUBIR IMAGENES AL SERVIDOR

//Se cacha ele evento change
$(document).on("change", "#file", function (e){
    var element;
    var supportedImage = ["images/jpeg", "image/png", "image/gif"];
    var image = this.files[0].type;
    var seEncontraronElementosNoValidos = false;

    if (supportedImage.indexOf(image) != -1) {

      var formData = new FormData($("#Formulario")[0]);

      $.ajax({
        url: "process.php",
        type: "post",
        data: formData,
        cahe: false,
        contentType: false,
        processData: false,
        error: function(e){
        console.log(e.responseText);
        }
      });

    }
  });




//Eliminar la imagen
$(document).on("click", "Images .image-container", function(e){
    $(this).parent().remove();
});

});



var imagenheader = document.getElementById("file");
function cambiarImagen (imagen){
  imagenheader.src = imagen.src;
}
