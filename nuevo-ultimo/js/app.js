var getData = function(){
    var Fname = document.getElementById("mce-FNAME").value;
    var Lname = document.getElementById("mce-LNAME").value;
    var phone = document.getElementById("mce-PHONE").value;
    var email = document.getElementById("mce-EMAIL").value;

    if(Fname == ""){
        document.getElementById("mce-FNAME").focus();
    } else if (Lname == ""){
        var Lname = document.getElementById("mce-LNAME").focus();
    }else if (phone == ""){
        var phone = document.getElementById("mce-PHONE").focus();
    }else if (email == ""){
        var email = document.getElementById("mce-EMAIL").focus();
    }
    else{
        document.write('No se pueden insertar los datos');
    }

}