<?php

require './../practicaORM/bootstrap.php';

$comparador1 = $_GET['consulta'];
if (isset($comparador1)) {
    $query = $entityManager->createQuery("SELECT p.id, p.name FROM Province p WHERE p.name LIKE '".$comparador1."%' ");
    $provinces = $query->getResult();
    
  
    header('content-type: application/json');
    $result = json_encode($provinces);
    echo $result;
}
?>
