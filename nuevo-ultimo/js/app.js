var getData = function(){
    var Fname = document.getElementById("mce-FNAME").value;
    var Lname = document.getElementById("mce-LNAME").value;
    var phone = document.getElementById("mce-PHONE").value;
    var email = document.getElementById("mce-EMAIL").value;

    if(Fname == ""){
        document.getElementById("mce-FNAME").focus();
    } else if (Lname == ""){
        document.getElementById("mce-LNAME").focus();
    }else if (phone == ""){
        document.getElementById("mce-PHONE").focus();
    }else if (email == ""){
        document.getElementById("mce-EMAIL").focus();
    }
    else{
        if(!isNaN(phone)){

            var lead = new Leads(Fname, Lname, phone, email, "");
        document.getElementById("mce-FNAME").value = "";
        document.getElementById("mce-LNAME").value = "";
        document.getElementById("mce-PHONE").value = "";
        document.getElementById("mce-EMAIL").value = "";
        document.getElementById("mce-FNAME").focus();

       
        }
        
    }

}
var searchLead = function(){
    var textSearch = $("input#caja_busqueda").val();
    var lead = new Leads(textSearch, "", "consult.php");
    lead.searchLead();
}