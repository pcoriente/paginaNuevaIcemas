$(document).ready(function() {
    $("#btnIniciar").click(function() {
        var paso = validar();
        if (paso == true) {
            alertify.success("Bienvenido");
        }
    });

    function validar() {
        var paso = false;
        var usuario = $("#txtUsuario").val();
        var pass = $("#txtPassword").val();
        if (usuario == "" || pass == "") {
            alertify.error("Todos los campos son obligatorios");
        }
        else {
            var informacion = "usuario=" + usuario + "&pass=" + pass;
            $.get("validarLogin.php", informacion, function(respuesta) {
                if (respuesta == 1) {
                    document.location.href = 'index.php';
                }
                else if (respuesta == 0) {
                    alertify.error("Ingrese Usuario y Pasword correctos");
                }
                else {
                    alertify.error(respuesta);
                }
            });
        }
        return paso;
    }
});