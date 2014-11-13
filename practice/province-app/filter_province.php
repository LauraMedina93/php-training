<?php

require './../practicaORM/bootstrap.php';


if (isset($_GET['consulta'])) {
    $query = $entityManager->createQuery("SELECT p.name FROM Province p WHERE p.name LIKE :name");
    $query->setParameter('name', $_GET['consulta'].'%');
    $provinces = $query->getResult();
    var_dump($provinces);
    exit();
}
?>
