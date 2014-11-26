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

        if (nameLength >= 1) {
            $.ajax({
                type: "GET",
                url: "filter_province.php",
                data: {"consulta": consulta},
                success: function(respuesta) {
                    $('#results').html('');
                    //if( respuesta != consulta ){ //alert que no existe provincia
                    //    alert('No existe la provincia con ese parametro');
                    //}
                    for (var i = 0; i < respuesta.length; i++) {
                        $('#results').append('<br>' + '<li>' + respuesta[i].name + '</li>' + '<br>');

                    }

                }
            });
        }
    });
    //Agregado que funciona a medias (no carga las ciudades por GET) 

    $("#results").on('click', 'li', function() {
        var consCity;
        consCity = $(this).text();
        $.ajax({
            type: "GET",
            url: "filter_city.php",
            data: {"consCity": consCity},
            success: function(respCity) {

                $("#results_city").html('');
                for (var i = 0; i < respCity.length; i++) {
                    $('#results_city').append('<br>' + '<li>' + respCity[i].name+ '</li>' + '<br>');

                }
            }
        }); //Hasta acá es la prueba!
    });

    $("#results").on('click', 'li', function() { alert($(this).text())
    });
});
