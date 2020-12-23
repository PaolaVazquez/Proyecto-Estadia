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

//Cachamos el evento change
$(document).on("change", "#add-new-photo", function(){
    var supportedImages = ["image/jpeg", "images/png", "images/gif"];
    var image = this.files[0].type;
    
    if (supportedImages.indexOf(image) != -1){
        var formData = new FormData($("#Formulario")[0]);

        $.ajax({
            url: "process.php",
            type: "post",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(res){
                console.log(res);
            },
            success: function(e){
                console.log(e.responseText);
            },
            error: function(e){
                console.log(e.responseText);
            }
        });
    }
    else
    alert ("Sube una imagen");

    
    


});




//Eliminar la imagen
$(document).on("click", "Images .image-container", function(e){
    $(this).parent().remove();
});

});











