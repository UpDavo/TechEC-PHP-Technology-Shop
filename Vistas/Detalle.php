<!DOCTYPE html>
<?php
include '../DAO/metodosDAO.php'; //incluyo los metodos
$codigo = $_REQUEST['codigo']; //Recibe el codigo por el url

$objetoMetodos = new metodosDAO();

$listaCodigo = $objetoMetodos->ListarProductosCodigo($codigo);

foreach ($listaCodigo as $row) {
    $nombre = $row[1];
    $precio = $row[2];
    $detalle = $row[5];
    $imagen = $row[6];
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <table>
            <tr>
                <th rowspan="4">
                    <img src="../assets/img/<?php echo $imagen; ?>" alt="Producto" width="200" height="170">
                </th>
                <th>
                    <?php echo $nombre ?>
                </th>
            </tr>
            <tr>
                <td align="justify"><?php echo $detalle; ?></td>
            </tr>
            <tr>
                <th align="right">$ <?php echo $precio; ?></th>
            </tr>
            <tr>
                <th align="right">Ingrese la Cantidad: <input type="number" min="1" max="100" value="1" name="txtCantidad" style="margin-left: 10px;"></th>
            </tr>
        </table>
    </form>
</body>

</html>