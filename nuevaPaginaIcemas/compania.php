<?php
$sql = "SELECT * FROM compania WHERE activo = '1'";
$rs = mysql_query($sql);
if ($rs == false) {
    echo mysql_error();
} else {
    while ($datos = mysql_fetch_array($rs)) {
        $ruta = $datos["ruta"];
        $rutaImagen = explode("/", $ruta);
        $nuevaRuta = $rutaImagen[1] . "/" . $rutaImagen[2] . "/" . $rutaImagen[3];
        ?>
        <h3 class="section-title"><span>NUESTRA COMPANIA</span></h3>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $nuevaRuta; ?>" alt="" class="img-responsive img-thumbnail">
            </div>
            <div class="col-md-8">
                <p>
                    <?php echo utf8_encode($datos["descripcion"]); ?>
                </p>
            </div>
        </div>

        <?php
    }
}