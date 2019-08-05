<!DOCTYPE html>
<?php
session_start();
include '../DAO/metodosDAO.php'; //incluyo los metodos
$codigo = $_REQUEST['codigo']; //Recibe el codigo por el url

$objetoMetodos = new metodosDAO();

$listaCodigo = $objetoMetodos->ListarProductosVendidos($codigo);

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        console.log(<?php echo json_encode($listaCodigo); ?>)
    </script>
</head>

<style>
    button:hover {
        cursor: pointer;
    }
</style>

<body>
    <form action="">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>
                        <strong>Nombre del producto</strong>
                    </th>
                    <th>
                        <strong>Cantidad</strong>
                    </th>
                    <th>
                        <strong>Costo Individual</strong>
                    </th>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaCodigo as $row1) {
                        $listaValores =  $objetoMetodos->obtenerNombrePorCodigo($row1[2]);
                        foreach ($listaValores as $rowValores) {
                            $nombre = $rowValores[0];
                            $valor = $rowValores[1];
                        }
                        ?>

                        <tr>
                            <td>
                                <?php
                                echo $nombre;
                                ?>
                            </td>
                            <td>
                                <?php echo $row1[3] ?>
                            </td>
                            <td>
                                <?php
                                echo "$" . $valor * $row1[3];
                                ?>
                            </td>
                        </tr>


                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </form>
</body>

</html>