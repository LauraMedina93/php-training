<?php
require './../practicaORM/bootstrap.php';

$comparador = $_GET['consCity'];
if (isset($comparador)) {
    $query = $entityManager->createQuery("SELECT c.name FROM city c JOIN c.province p WHERE p.name = '".$comparador."' ");
    $cities = $query->getResult();
  
    header('content-type: application/json');
    $results = json_encode($cities);
    echo $results;
}
