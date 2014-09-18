    <?php
function connect (){
    $connect = mysqli_connect('localhost','admin','admin','todolist');
    if ($connect){
        return $connect;
    }else{
        throw new Exception($message);
    }
}
function getUser ($name){
    try {
        $link = connect();
        $result = mysqli_query($link, 'SELECT * FROM usuarios WHERE nombre ="' . $name . '"');
        return mysqli_fetch_assoc($result);
    } catch (Exception $exc) {
        syslog(LOG_CRIT, $exc->getMessage());
        return $exc;
    }

    
}
function getTasks($nomUsuario){
    $usuario = getUser($nomUsuario);
    $link = connect();
    $result = mysqli_query($link, 'SELECT * FROM tareas WHERE usuarioID ='. $usuario['usuarioID'] );
    return ($result);
}
function addTask ($nomUsuario,$name){
    $user = getUser($name);
    var_dump($user);
    $link = connect();
    $result = mysqli_query($link,'INSERT INTO tareas (usuarioID,nomTarea) VALUES ('.$user['usuarioID'].', "'.$name.'")');
    return $result;
}
function addUser ($name,$pass){
    $link = connect();
    $pass = md5($pass);
    $result = mysqli_query($link, 'INSERT INTO usuarios (nombre, password) VALUES ("'.$name.'","'.$pass.'") ');
}

    ?>