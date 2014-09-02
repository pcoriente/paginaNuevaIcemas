<?php
include './dao/DAO.php';
$dao = new dao();
$sql = "SELECT * FROM servicios";
try {
    $informacion = $dao->traerInformacion($sql);
    ?>
    <table class="table ">
        <thead>
        <th>Imagen</th>
        <th>Activo</th>
    </thead>
    <?php
    while ($rs = mysql_fetch_array($informacion)) {
        ?>
        <tr>
            <td><a><?php echo $rs["imagen"]; ?></a></td>
            <td><?php if ($rs["activo"] == 0) { ?><a onclick="activar(<?php echo $rs[0]; ?>);"><i class="fa fa-thumbs-o-down fa-2x"></i></a><?php } else { ?> <a onclick="desactivar(<?php echo $rs[0]; ?>)"><i class="fa fa-thumbs-o-up fa-2x"></i></a><?php } ?></td>
        </tr>
        <?php
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
</table>