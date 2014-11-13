$(document).ready(function(){
        var consulta;                                                  
         //hacemos focus al campo de búsqueda
        $("#text").focus();                                                                                           
        //comprobamos si se pulsa una tecla
        $("#text").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#text").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: consulta,
                    dataType: "html",
                   
                    success:function(){
                         alert ("Usted ingreso: " + consulta);
                    },      
              });                                                     
        });                                                  
});
