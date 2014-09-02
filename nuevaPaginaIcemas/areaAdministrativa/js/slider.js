$(document).ready(function () {
    $("#txtDescripcionServicio").text("");
    $("#tablaImagenesSlider").load("dameImagenesSlider.php");
});

function activar(id) {
    $("#tablaImagenesSlider").load("activarDesactivarImagenSlider.php?id="+id+"&activar=1");
//    alert("activar");
}
function desactivar(id) {
    $("#tablaImagenesSlider").load("activarDesactivarImagenSlider.php?id="+id+"&activar=0");
//    alert("desactivar");
}