//Se cacha el evento change
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

var imagenDestino1 = document.getElementById("Destino-1");
function cambiarImagen(imagen){
    imagenDestino1.src = imagen.src;
}
