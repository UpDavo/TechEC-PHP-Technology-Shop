<!DOCTYPE html>

<?php

include_once '../DAO/metodosDAO.php';

$objMetodo = new metodosDAO();
$lista = $objMetodo->listarOrdenes();

?>

<html lang="en">

<head>
  <title>Tech EC | Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- Material Kit CSS -->
  <link href="../Admin/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="../Admin/assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Tech EC | Administrador
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p>Pedidos Realizados</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Catalogo.php">
              <i class="material-icons">home</i>
              <p>Pestaña Principal</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Usuario Administrador</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">notifications</i>
                  <p class="d-lg-none d-md-block">
                    Notificaciones
                  </p>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">


              <div class="row">
                <div class="col-md-6">

                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                      </div>
                      <p class="card-category">Pedidos Realizados</p>
                      <h3 class="card-title"><?php echo count($lista) ?>
                        <small>Pedidos</small>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">date_range</i> Desde el comienzo de los tiempos
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-6">

                  <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                      </div>
                      <p class="card-category">Ultima persona en realizar un pedido</p>
                      <h3 class="card-title">
                        <?php

                        $ultimoUsuario = count($lista) - 1;

                        $usuarioUltimo = $objMetodo->BuscarUsuarioNombre($lista[$ultimoUsuario][1]);
                        echo $usuarioUltimo;

                        ?>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">date_range</i>
                        <?php

                        $tiempoUltimo = strtotime($lista[$ultimoUsuario][3]);
                        $tiempoUltimo2 = date('l, F d y h:i:s', $tiempoUltimo);
                        echo $tiempoUltimo2;

                        ?>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-success">
                      <h4 class="card-title ">Ordenes Realizadas</h4>
                      <p class="card-category">Estas son las ordenes realizadas</p>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              <strong>ID del pedido</strong>
                            </th>
                            <th>
                              <strong>ID del cliente</strong>

                            </th>
                            <th>
                              <strong>Nombre del Cliente</strong>

                            </th>
                            <th>
                              <strong>Valor del pedido</strong>

                            </th>
                            <th>
                              <strong>Fecha de creado del pedido</strong>

                            </th>
                            <th>
                              <strong>Status</strong>

                            </th>
                          </thead>
                          <tbody>
                            <?php

                            foreach ($lista as $row) { ?>

                              <tr>
                                <td>
                                  <strong><?php echo $row[0]; ?></strong>
                                </td>
                                <td>
                                  <?php echo $row[1]; ?>
                                </td>
                                <td>
                                  <?php

                                  $usuario = $objMetodo->BuscarUsuarioNombre($row[1]);
                                  echo $usuario;

                                  ?>
                                </td>
                                <td>
                                  <?php echo $row[2]; ?>
                                </td>
                                <td>
                                  <?php

                                  $tiempo = strtotime($row[3]);
                                  $tiempoFinal = date('l, F d y h:i:s', $tiempo);
                                  echo $tiempoFinal;

                                  ?>
                                </td>
                                <td class="text-success">
                                  <?php

                                  if ($row[5] == 1) {
                                    echo "Pedido Realizado";
                                  }

                                  ?>
                                </td>
                              </tr>

                            <?php } ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
            var datos = <?php echo json_encode($lista); ?>;
            console.log(datos);
          </script>

          <p></p>



        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>, Hecho con <i class="material-icons">favorite</i> por
            <a href="https://www.twitter.com/danielgd40" target="_blank">DanielGD40</a>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../Admin/assets/js/core/jquery.min.js"></script>
  <script src="../Admin/assets/js/core/popper.min.js"></script>
  <script src="../Admin/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../Admin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../Admin/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../Admin/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../Admin/assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../Admin/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $(".sidebar");

        $sidebar_img_container = $sidebar.find(".sidebar-background");

        $full_page = $(".full-page");

        $sidebar_responsive = $("body > .navbar-collapse");

        window_width = $(window).width();

        $(".fixed-plugin a").click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass("switch-trigger")) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $(".fixed-plugin .active-color span").click(function() {
          $full_page_background = $(".full-page-background");

          $(this)
            .siblings()
            .removeClass("active");
          $(this).addClass("active");

          var new_color = $(this).data("color");

          if ($sidebar.length != 0) {
            $sidebar.attr("data-color", new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr("filter-color", new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr("data-color", new_color);
          }
        });

        $(".fixed-plugin .background-color .badge").click(function() {
          $(this)
            .siblings()
            .removeClass("active");
          $(this).addClass("active");

          var new_color = $(this).data("background-color");

          if ($sidebar.length != 0) {
            $sidebar.attr("data-background-color", new_color);
          }
        });

        $(".fixed-plugin .img-holder").click(function() {
          $full_page_background = $(".full-page-background");

          $(this)
            .parent("li")
            .siblings()
            .removeClass("active");
          $(this)
            .parent("li")
            .addClass("active");

          var new_image = $(this)
            .find("img")
            .attr("src");

          if (
            $sidebar_img_container.length != 0 &&
            $(".switch-sidebar-image input:checked").length != 0
          ) {
            $sidebar_img_container.fadeOut("fast", function() {
              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $sidebar_img_container.fadeIn("fast");
            });
          }

          if (
            $full_page_background.length != 0 &&
            $(".switch-sidebar-image input:checked").length != 0
          ) {
            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .data("src");

            $full_page_background.fadeOut("fast", function() {
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
              $full_page_background.fadeIn("fast");
            });
          }

          if ($(".switch-sidebar-image input:checked").length == 0) {
            var new_image = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .attr("src");
            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
              .find("img")
              .data("src");

            $sidebar_img_container.css(
              "background-image",
              'url("' + new_image + '")'
            );
            $full_page_background.css(
              "background-image",
              'url("' + new_image_full_page + '")'
            );
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css(
              "background-image",
              'url("' + new_image + '")'
            );
          }
        });

        $(".switch-sidebar-image input").change(function() {
          $full_page_background = $(".full-page-background");

          $input = $(this);

          if ($input.is(":checked")) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn("fast");
              $sidebar.attr("data-image", "#");
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn("fast");
              $full_page.attr("data-image", "#");
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr("data-image");
              $sidebar_img_container.fadeOut("fast");
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr("data-image", "#");
              $full_page_background.fadeOut("fast");
            }

            background_image = false;
          }
        });

        $(".switch-sidebar-mini input").change(function() {
          $body = $("body");

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $("body").removeClass("sidebar-mini");
            md.misc.sidebar_mini_active = false;

            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
          } else {
            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
              "destroy"
            );

            setTimeout(function() {
              $("body").addClass("sidebar-mini");

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event("resize"));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });
      });
    });
  </script>
</body>

</html>