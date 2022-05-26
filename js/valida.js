window.onload = function() {


    //validacion del correo en login
    const boton = document.getElementById('element_30');
    // Agregar listener
    boton.addEventListener("click", function(evento) {
        // Aquí todo el código que se ejecuta cuando se da click al botón
        campo = document.getElementById('element_4');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir el correo");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();

        }


        //validacion de la contraseña

        campo = document.getElementById('element_5');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir la contraseña");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();
        }


        campo = document.getElementById('element_5');
        valor = campo.value;
        if (valor.length != 8) {
            alert("la contraseña tiene que tenr 8 caracteres");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();

        }

        campo = document.getElementById('element_60').selectedIndex;
        valor = campo.value;
        if (campo == null || campo == 0) {
            alert("debes marcar uno");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();
        }

    });
};