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
                    //if( respuesta !== consulta ){ //alert que no existe provincia
                    //    alert('No existe la provincia con ese parametro');
                    //}
                    for (var i = 0; i < respuesta.length; i++) {
                        $('#results').append('<br>' + '<li>' + respuesta[i].name + '</li>' + '<br>');

                    }
                    $('#count').html('');
                    
                    $('#count').append('<br>'+'<li>'+'Cantidad de provincias encontradas: '+respuesta.length+'</li>'+'<br>');
                    if (respuesta.length == 0) {
                        $('#count1').html('');
                        $('#results_city').html('No existen ciudades disponibles');
                        $('#count').append('<br>'+'<li>'+'No hay Provincias que coincidan'+'</li>'+'<br>');
                        
                    }
                }
            });
        }
    });
    
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
                $('#count1').html('');
                $('#count1').append('<br>'+'<li>'+'Cantidad de ciudades encontradas: '+respCity.length+'</li>'+'<br>');
            }
        }); 
    });

    $("#results").on('click', 'li', function() { alert($(this).text())
    });
});
