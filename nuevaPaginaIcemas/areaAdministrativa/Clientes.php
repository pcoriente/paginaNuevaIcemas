<html>
    <head>
        <meta charset="utf-8">
        <title>Boomerang - Multipurpose Template: Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/global-style.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../alertify/themes/alertify.core.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../alertify/themes/alertify.default.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" href="../images/favicon.png" type="image/png">
    </head>
    <body style="background-color: #c1c5c7">
        <form enctype="multipart/form-data" method="post" action="guardarImagenClientes.php">
            <div class="container" style="background-color: white">
                <?php
                include './menu.php';
                ?>
                <section class="well col-lg-12">
                    <article  class="col-lg-6">
                        <h3> <strong>Módulo de imagenes de nuestros CLIENTES</strong></h3>
                        <br>
                        <input type="file" required="true"  name="uploadedfile"/>
                        <br>
                        <input type="submit" 
                               value="Guardar Imagen"
                               class="btn btn-success"
                               title="Cargar imagen"/>
                        <br>
                    </article>
                </section>
                <section>
                    <br>
                    <table class="table table-hover" id="tablaImagenesSlider">
                        <thead>
                        <th>
                            Imagen
                        </th>
                        <th>
                            Activo
                        </th>
                        </thead>
                    </table>
                </section>
            </div>
        </form>
    </body>


    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/modernizr.custom.js"></script>
    <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="../js/jquery.cookie.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.js"></script>
    <script type="text/javascript" src="../assets/hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="../assets/masonry/masonry.js"></script>
    <script type="text/javascript" src="../assets/page-scroller/jquery.ui.totop.min.js"></script>
    <script type="text/javascript" src="../assets/mixitup/jquery.mixitup.js"></script>
    <script type="text/javascript" src="../assets/mixitup/jquery.mixitup.init.js"></script>
    <script type="text/javascript" src="../assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="../assets/easy-pie-chart/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="../assets/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="../assets/sticky/jquery.sticky.js"></script>
    <script type="text/javascript" src="../js/jquery.wp.custom.js"></script>
    <script type="text/javascript" src="../js/jquery.wp.switcher.js"></script>
    <script type="text/javascript" src="../alertify/lib/alertify.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
</html>