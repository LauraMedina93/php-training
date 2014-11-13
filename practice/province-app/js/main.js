$(document).ready(function() {
    var consulta;
    //hacemos focus al campo de búsqueda
    $("#text").focus();
    //comprobamos si se pulsa una tecla
    $("#text").keyup(function(e) {
        //obtenemos el texto introducido en el campo de búsqueda
        consulta = $("#text").val();
        var $this = $(this);
        var nameLength = $this.val().length;
        //hace la búsqueda

        if (nameLength >= 2) {
            $.ajax({
                type: "GET",
                url: "filter_province.php",
                data: {"consulta": consulta},
                dataType: "html",
                success: function(respuesta){
                    alert (respuesta);
                }
            });
        }
    });
});

//funcion de chango

