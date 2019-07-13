<!DOCTYPE html>

<?php
session_start();
$lista = $_SESSION['lista'];
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TechEC</title>
</head>

<body>
    <div class="container">

        <h2 align="center" style="margin-top: 7%;">CATALOGO DE PRODUCTOS</h2>
        <hr>
        <br>
        <table border="0" width="700" align="center" class="table">
            <tr align="center">
                <?php
                $numeroObjetos = 0;
                foreach ($lista as $recorrido) {
                    if ($numeroObjetos == 3) {
                        echo "<tr align='center'>";
                        $numeroObjetos = 1;
                    } else {
                        $numeroObjetos++;
                    }
                    ?>
                    <th>
                        <img src="../img/<?php echo $recorrido[6]; ?>" width="120" height="120" alt="Imagen">
                        <br>
                        <br>
                        <h3>
                            <?php echo $recorrido[1] ?>
                        </h3>
                        <h4>
                            <?php echo $recorrido[2] ?>
                        </h4>
                        <br>
                        <button type="button" class="btn btn-danger btn-lg">Agregar</button>
                    </th>

                <?php
                }
                ?>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>