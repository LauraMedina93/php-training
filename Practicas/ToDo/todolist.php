<?php
$mysql = mysqli_connect("localhost", "admin", "admin", "todolist");
$res = mysqli_query($mysql, "SELECT * from tareas WHERE usuarioID = '2'");
$row = mysqli_fetch_assoc($res);
echo '<pre>'.var_dump($row).'<pre>';
echo "\n";

while ($row !== NULL) {
    echo '<pre>'.var_dump($row).'<pre>';
    echo "\n";
    $row = mysqli_fetch_assoc($res);
}

$res = mysqli_query($mysql, "SELECT * from tareas WHERE usuarioID = '4'");
$row = mysqli_fetch_assoc($res);
echo '<pre>'.var_dump($row).'<pre>';

?>
