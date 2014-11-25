<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Provincias</title>
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
    </head>
    
    <body>
        <h3 id="h3"> Escriba el nombre de la Provincia a buscar</h3>
        <div class="search-box"> 
                <input id="text" name="text" placeholder="Search...">
                <input type="submit" id="buscar" name="buscar" value="Search!">
        </div>
        <div class="result-box">
            <br>
            <div class="box1">
                <ul id="results">
                    <li>Provincias Disponibles</li>
                </ul>
               
            </div>
            <div class="box2">
                <ul id="results_city">
                    <li> Ciudades disponibles</li>
                </ul>
                
            </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>