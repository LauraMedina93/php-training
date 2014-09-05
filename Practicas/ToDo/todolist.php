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
    while ($row !== NULL) {
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
