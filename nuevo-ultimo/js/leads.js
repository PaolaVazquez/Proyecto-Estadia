function Leads (Fname, Lname, phone, email, action){
    this.action = action;
    this.Fname = Fname;
    this.Lname = Lname;
    this.phone = phone;
    this.email = email;
}
Leads.prototype.AddLead = function(){
    console.log(this.Fname + " " +  this.Lname + " " + this.phone + " " + this.email);
    $.ajax({
        type: "POST", 
    url: this.action,
    data: {Fname: this.Fname, Lname: this.Lname, phone: this.phone, email: this.email},
    success: function(response){
        if(response == 1){
            alert("Datos insertados");
        }
    }
    });
}
Leads.prototype.searchLead = function(){
    $.post(this.action, {caja_busqueda: this.Fname}, function(response){
        $("#resultSearch").php(response);
    })
}