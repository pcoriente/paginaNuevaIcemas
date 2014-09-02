<?php
$sql = "SELECT * FROM clientes WHERE activo = '1'";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    while ($r = mysql_fetch_array($datos)) {
        $ruta = $r["ruta"];
        $nuevaRuta = explode("/", $ruta);
        ?>
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="client">
                <a href="#">
                    <img src="<?php echo $nuevaRuta[1] . "/" . $nuevaRuta[2] . "/" . $nuevaRuta[3]; ?>" alt="">
                </a>
            </div>
        </div>

        <?php
    }
}

