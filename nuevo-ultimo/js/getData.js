$(document).ready(function(){
    $("#usuarios").change(function(){
        var id = $(this).find(":selected").val();
        var dataString = 'empid=' + id;

        $.ajax({
            url: 'getDatos.php',
            dataType: "json",
            data: dataString,
            change: false,
            success: function(employeeData){
                if(employeeData){
                    $("#heading").show();
                    $("#no_records").hide();
                    $("#Fname").text(employeeData.Fname);
                    $("#Lname").text(employeeData.Lname);
                    $("#position").text(employeeData.Position);
                    $("#phone").text(employeeData.Phone);
                    $("#email").text(employeeData.Email);
                    $("#Users").text(employeeData.Access);
                    $("#records").show();
                }else{
                    $("#heading").hide();
                    $("#records").hide();
                    $("#no_records").show();
                }
            }
        });
    })
});














/*
$(document).ready(function(){
    //Código para obtener los datos de el usuario
    $("#UserName").change(function(){
        var id = $(this).find(":input").val();

        var dataString = 'empid='+id;

        $.ajax({
            url: 'getDatos.php',
            dataType: "json",
            data: dataString,
            cache: false,
            success: function(employeeData){
                if(employeeData){
                    $("#heading").show();
                    $("#no_records").hide();
                    $("#firstname").text(employeeData.Fname);
                    $("#lastname").text(employeeData.Lname);
                    $("#e-mail").text(employeeData.Email);
                    $("#tel").text(employeeData.Phone);
                    $("#access").text(employeeData.Acces);
                    $("#records").show();
                }else{
                    $("#heading").hide();
                    $("#records").hide();
                    $("#no_records").show();
                }
            }
        });
    })
});*/