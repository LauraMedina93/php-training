<?php

require './../practicaORM/bootstrap.php';


if (isset($_GET['consulta'])) {
    $query = $entityManager->createQuery("SELECT p.id, p.name FROM Province p WHERE p.name LIKE :name");
    $query->setParameter('name', $_GET['consulta'].'%');
    $provinces = $query->getResult();
  
    header('content-type: application/json');
    $result = json_encode($provinces);
    echo $result;
}
?>
