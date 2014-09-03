<html>

    <head>
    <h1> Funciones Factoriales </h1>
</head>
<body>
    <form  method='GET' action="factorial.html.php">
        Numero: <input type="text" name="numero" >
        <input type="submit" value="Calcular">
    </form>
    <?php include 'factorial.php'; ?>
    <?php if (isset($_GET['numero'])){
        echo 'La factorial es: ' . factorial($_GET['numero']) ;
    }
    ?>
</body>
</html>