<?php

//Funcion que devuelve las tareas del usuario 'Juanito'
function Query($nomUsuario) {
    $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
    $res = mysqli_query($mysql, "SELECT * FROM usuarios AS u INNER JOIN tareas AS t ON u.usuarioID = t.usuarioID WHERE u.usuarioID =2");
    $row = mysqli_fetch_assoc($res);

//Lista con items marcando la tarea
    echo '<h1>'.'Tareas de: ' .'<b>'. $row['nombre'].'</b></h1>';
    echo "\n";
    echo '<ol>';
    while ($row !== NULL) { //imprime hasta conocer todos los datos del array
        echo '<h3>'.'<li>' . ($row['nomTarea']) . '</li></h3>';
        echo "\n";
        $row = mysqli_fetch_assoc($res);
    }
    echo '</ol>';
    /** $res = mysqli_query($mysql, "SELECT * from tareas WHERE usuarioID = '4'");
      $row = mysqli_fetch_assoc($res);
      echo '<pre>'.var_dump($row).'<pre>';
    */
}

Query('juanito')
?>

<html>
    <head> <h2> Agregar un Nuevo Usuario</h2> </head>

<body>

    
    <?php
    //funcion que inserta un usuario nuevo
    function nuevoUsuario($usuarioNuevo) {
        $mysql = mysqli_connect("localhost", "admin", "admin", "todolist"); //conexion con la bd
        $res2 = mysqli_query($mysql, "INSERT INTO `usuarios`(nombre) VALUES ('$usuarioNuevo')"); //ingreso de usuario

        echo 'Se agrego el usuario' . $res2['nombre'];// imprime el texto y el nombre ingresado
        if (!$res2) {
            echo mysqli_error($mysql);//imprime el error en caso de no cargarse el usuario
        }
    }
    //funcion que inserta una tarea nueva
    function insertar($tareaNueva) {
        $mysql = mysqli_connect("localhost", "admin", "admin", "todolist");//conexion con la bd
        $res3 = mysqli_query($mysql, "INSERT INTO `tareas`(`nomTarea`, `estado`, `usuarioID`) VALUES ($nomTarea,$estado,$usuarioID)"); //ingreso de tarea por medio de una query
        $row = mysqli_fetch_assoc($res);//no es necesario, solo si se hace un 'select'
        if (!$res3) {
            echo mysqli_error($mysql);
        }
    }

    nuevoUsuario('dario')
    ?>


</body>
</html>
