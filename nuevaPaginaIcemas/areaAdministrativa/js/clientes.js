$(document).ready(function () {
    $("#tablaImagenesClientes").load("dameImagenesClientes.php");
});

function activar(id) {
    $("#tablaImagenesClientes").load("activarDesactivarImagenClientes.php?id=" + id + "&activar=1");
}

function desactivar(id) {
    $("#tablaImagenesClientes").load("activarDesactivarImagenClientes.php?id=" + id + "&activar=0");
}