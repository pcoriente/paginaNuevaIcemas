<?php
include './DaoConnection/coneccion.php';
$cn = new coneccion();
$sql = "SELECT * FROM slider WHERE activo = '1'";
$cn->Conectarse();
$rs = mysql_query($sql);
if ($rs == false) {
    echo mysql_error();
} else {
    ?>
    <div id="layerslider" style="width:100%;height:500px;">       
        <?php
        while ($datos = mysql_fetch_array($rs)) {
            $ruta = $datos["ruta"];
            $cadena = explode("/", $ruta);
            $imagen = $cadena[1] . "/" . $cadena[2] . "/" . $cadena[3]
            ?>

            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                <!-- slide background -->
                <img src="images/slider/fw-1.jpg" class="ls-bg" alt="Slide background"/>
                <!-- Right Image -->
                <img src="<?php echo $imagen ?>" 
                     class="ls-l" style="top:58%; left:70%;" 
                     data-ls="offsetxin:0;offsetyin:250;durationin:950;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" alt="Image layer">
                <!-- Left Text -->
                <h3 class="ls-l title" style="width:500px; top:25%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                    <?php echo $datos["titulo"]; ?>
                </h3>
                <h3 class="ls-l subtitle" style="top:40%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;"><?php echo $datos["descripcion"]; ?></h3>
                <p class="ls-l text-standard" style="width:500px; top:55%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:2500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
                 
                </p>
                <!--<a href="https://wrapbootstrap.com/theme/boomerang-multipurpose-template-WB021609D" class="btn btn-two btn-lg ls-l" style="top:75%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:3500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" target="_blank">Purchase Boomerang</a>-->
            </div>
        <?php }
        ?>
    </div>
    <?php
}