<!DOCTYPE html>

<?php
session_start();
$lista = $_SESSION['lista'];
?>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h2 align="center">CATALOGO DE PRODUCTOS</h2>
    <hr>
    <br>
    <table border="0" width="700" align="center">
        <?php
        $numeroObjetos = 0;
        foreach ($lista as $recorrido) {
            if ($numeroObjetos == 3) {
                echo "<tr>";
                $numeroObjetos = 1;
            } else {
                $numeroObjetos++;
            }
            ?>
            <th><img src="../img/<?php echo $recorrido[6]; ?>" width="120" height="120" alt="Imagen">
            <?php
            }
            ?>
</body>

</html>