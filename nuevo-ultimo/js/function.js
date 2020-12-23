function createPreview(file){
    var imgCodified = URL.createObjectURL(file);
    var img = $('<div class= "col-sm-3"> <div class="image-container"> <figure> <img src=""' + imgCodified + '"alt="Foto Subida"> <figcaption> <i class="icon-cross"></i> </figcaption> </figure> </div> </div>');
    $(img).insertBefore("#Header");
}