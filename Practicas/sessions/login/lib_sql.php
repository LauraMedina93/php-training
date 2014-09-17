    <?php
function connect (){
    return mysqli_connect('localhost','admin','admin','todolist');
}
function getUser ($name){
    $link = connect();
    $result = mysqli_query($link, 'SELECT * FROM usuarios WHERE nombre ="'.$name.'"');
    return mysqli_fetch_assoc($result);
}
function getTasks($nomUsuario){
    $usuario = getUser($nomUsuario);
    $link = connect();
    $result = mysqli_query($link, 'SELECT * FROM tareas WHERE usuarioID ='. $usuario['usuarioID'] );
    return ($result);
}
function agregarTarea ($nomUsuario,$name){
    
}
    ?>