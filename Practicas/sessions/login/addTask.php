<?php
session_start();
require_once 'lib_sql.php';
//no esta funcionando - no agrega las tareas
if(isset($_POST['name']) && !empty($_POST['name'])){
    addTask($_SESSION['name'],$_POST['name']);
    header('Location: todo.php');
}
 else {
    header('Location: todo.php?error="invalid task name"');
}
?>
