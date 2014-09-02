<?php
$sql = "SELECT * FROM servicios WHERE activo = '1'";
$rsServicios = mysql_query($sql);
if ($rsServicios == false) {
    echo mysql_error();
} else {

    while ($datosServicios = mysql_fetch_array($rsServicios)) {
        $ruta = explode("/", $datosServicios["imagen"]);
        $rutaImagen = $ruta[1] . "/" . $ruta[2] . "/" . $ruta[3];
        ?>
        <!--<img src=""/>-->
        <div class="col-md-3">
            <div class="w-box inverse">
                <div class="figure">
                    <img alt="" src="<?php echo $rutaImagen; ?>" class="img-responsive"/>
                    <div class="figcaption bg-2"></div>
                    <div class="figcaption-btn">
                        <a href="<?php echo $rutaImagen; ?>" class="btn btn-xs btn-one theater">
                            <i class="fa fa-plus-circle"></i> Zoom</a>
                        <a href="services.html" class="btn btn-xs btn-one">
                            <i class="fa fa-link"></i> Mas</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <h2><?php echo $datosServicios["servicio"]; ?></h2>
                        <small>Brand creation</small>
                    </div>
                    <div class="col-xs-3">
                        <div class="like-button">
                            <span class="button liked">
                                <i class="fa fa-heart"></i>
                            </span>
                            <span class="count"><small>123</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
