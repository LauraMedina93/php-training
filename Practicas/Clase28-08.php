<html>
    <head>
         <h1> Funciones Factoriales</h1>
    </head>
    <form  method='GET' action="Clase28-08.php">
        Numero: <input type="text" name="numero" >
        <input type="submit" value="Calcular">
        </form>
    <body>
       
<?php
function factorial ($numero) {
   $x = 1;
       for ( $i = 1; $i <= $_GET['numero']; $i++) {
           $x = $x * $i;
       }
    return $x;
   
}
echo 'La factorial es '.  factorial('numero');

?>
    </body>
</html>

