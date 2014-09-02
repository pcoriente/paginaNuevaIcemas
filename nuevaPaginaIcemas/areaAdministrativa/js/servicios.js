$(document).ready(function () {
    $("#txtDescripcionServicio").val("");
    $("#tablaServicios").load("dameImagenesServicios.php");
});


function activar(id) {
    $("#tablaServicios").load("activarDesactivarImagenesServicios.php?id=" + id + "&activar=1");
//    alert("activar");
}

function desactivar(id) {
    $("#tablaServicios").load("activarDesactivarImagenesServicios.php?id=" + id + "&activar=0");
//    alert("desac");
}