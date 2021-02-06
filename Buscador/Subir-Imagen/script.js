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

(function (){
  function filePreview(input){
    if(input.files && input.files[0]){
      var reader = new FileReader();

      reader.onload = function(e){
        $('#imgSalida').html("<img src'"+e.target.result+"'/>");
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $('file').change(function (){
    filePreview(this);
  });
})();


document.getElementById("file").onchange = function(e){
  let reader = new FileReader();
  reader.onload = function(){
    let preview = document.getElementById("imgSalida"),
    image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}