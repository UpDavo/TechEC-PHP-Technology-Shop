<!DOCTYPE html>
<?php
session_start();
include '../DAO/metodosDAO.php'; //incluyo los metodos
$codigo = $_REQUEST['codigo']; //Recibe el codigo por el url

$objetoMetodos = new metodosDAO();

$listaCodigo = $objetoMetodos->ListarProductosCodigo($codigo);

foreach ($listaCodigo as $row) {
    $id = $row[0];
    $nombre = $row[1];
    $precio = $row[6];
    $detalle = $row[2];
    $imagen = $row[5];
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    button:hover {
        cursor: pointer;
    }
</style>

<body>
    <form action="">
        <table style="margin-bottom: 40px;">
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
        </table>
        <div align="center" id="agregar">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <a class="btn btn-success" href="../Pagos/AccionCarta.php?action=addToCart&id=<?php echo $id ?>">Agregarlo al carrito</a>
        </div>
    </form>



</body>

</html>