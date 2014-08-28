<html>
    <head>
    </head>
    
    <body>
        <h1> Funciones Factoriales</h1>
<?php
function factorial ($numero) {
   $x = 1;
       for ( $i = 1; $i <= $numero; $i++) {
           $x = $x * $i;
       }
    return $x;
   
}
echo "El factorial de 3 es ".factorial(3)."<br>";
echo "El factorial de 4 es ".factorial(4)."<br>" ;
echo "El factorial de 5 es ".factorial(5). "<br>";
?>
    </body>
</html>
