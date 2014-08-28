<!--1 - ¿Qué tags me conviene usar para encerrar código php?

Para encerrar cogigo php es conveniente usar el signo "menor que"
seguido de un signo de interrogacion y las siglas php para abrir,
luego para encerrar y determinar donde termina dicho codigo, usamos
nuevamente el signo de interrogacion y el signo "mayor que".

Ejemplo:
<?php
//aqui va el codigo
?>

2 - Aparte del editor recomendado en el curso, 
¿qué tipo de editor puedo utilizar para escribir código PHP?

Existen distintas IDEs que podemos utilizar además de NetBeans,
depende del desarrollador elegirla y utilizarla.
Entre ellas estan: 
- Eclipse
- Aptana (de Eclipse)
- phpDesigner
- PDT, etc.

3 - ¿Qué sentencias se utilizan para generar salida por pantalla?

Para mostrar una salida en pantalla podemos utilizar el constructor
'echo' o tambien 'print', pero este ultimo permite utilizarse
dentro de una funcion, al contrario de 'echo'.

Ejemplo con 'echo':
$var1 = 12
echo "El valor de la variable es: $var"

Ejemplo con 'print':
($var1) ? print 'true' : print 'false';
print $var1

4 - En el siguiente código.
	$a = '2';
	$a = '1' + $a;
¿Qué tipo de dato tendría la variable $a y cuál sería su valor?

La variable $a sería un entero (integer), adoptaria el valor que se le asigno
en primera medida '2' y se le agrega el valor '1' en segundo lugar.
Por lo que, cuando se imprima o se la utilice, tendra el valor de
'2'+'1', es decir que $a = 3.

5 – ¿Qué significa que php está embebido en HTML?

Esto significa que el codigo php se encuentra en el mismo codigo HTML,
apartado unicamente encerrado entre los caracteres mencionados anteriormente.

Ejemplo:
<html>
    <head>
        <p> Cabecera del HTML </p>
    </head>
    <body>
        <?php
        //aqui ponemos el codigo a ejecutar
        ?>
    </body>
</html>

6 – ¿Cuáles son las variables predefinidas de PHP 
para realizar el pasaje de parámetros de entrada?

A lo largo del curso hemos visto distintos tipos de variables predefenidas
para poder utilizarlas en el codigo PHP, entre las vistas hasta el momento estan:
$_SESSION 
$_GET
$_POST


7 - Explique brevemente de qué manera se puede recuperar el valor
de las variables de entradas.

Para utilizar o modificar el valor de las variables de entrada podemos 
nombrarlas o bien con las variables GET, POST o REQUEST.

$_GET: nos permite recuperar parámetros desde urls o formularios enviados con el método GET;
$_POST: nos permite recuperar datos desde formularios.
$_REQUEST: captura variables desde urls, formularios o cookies.

8 - Analizando las siguientes sentencias 	
	$x = 0;
	$x += 5;
	
	y
	
	$x = 0;
	$x = $x + 5;
	
	Podemos decir que
	
	 - La primera posee un error de sintaxis
	 [x] Son Equivalentes	 
	 - La segunda es la forma correcta de hacerlo	 
	 - No producen el mismo resultado
	
	(Una Opción es la Correcta)

En ambos casos arroja el mismo resultado y ningun error de sintaxis, 
por lo que ambas son equivalentes.

9 - Realizar una variante de Hello World donde se ingrese un parámetro 
de entrada via GET que se llame nombre, y que en vez de decir simplemente 
Hello World diga Hello y el nombre ingresado. 
Adjuntar el código del script en la respuesta.


<html>
    <body>
        <form  method='GET' action="Prueba27-08.php">
        Nombre: <input type="text" name="nombre" >
        <input type="submit">
        </form>
        <?php
        //$nombre = $_GET['nombre'];
        //echo 'Hello '.$nombre;
        ?>
    </body>
    
</html>


10 – realizar una variante del script mostrado en clase en el cual el 
método a utilizar no sea GET ni POST sino REQUEST. 
Adjuntar el código del script en la respuesta.

<?php
//$elements = array('info', 41, 19, '2014', 'da');
//$needed = '2014';
//for ($index = 0; $index < count($elements); $index++) {
//    $current = $elements[$index]; 
//}
//$needed = isset($_REQUEST['needed']) ? $_REQUEST['needed']: '2014';
//echo 'La posicion del objeto: '.$needed.' es : ';
//$found = array_search($needed, $elements);
//echo $found !== FALSE ? $found : 'Objeto no Encontrado';
?>

-->

