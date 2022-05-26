window.onload = function() {


    //validacion del correo en login
    const boton = document.getElementById('element_40');
    // Agregar listener
    boton.addEventListener("click", function(evento) {
        // Aquí todo el código que se ejecuta cuando se da click al botón
        campo = document.getElementById('element_6');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir el correo");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();



        }


        //validacion de la contraseña

        campo = document.getElementById('element_7');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir la contraseña");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();
        }


        campo = document.getElementById('element_7');
        valor = campo.value;
        if (valor.length != 8) {
            alert("La contraseña tiene que tener 8 caracteres");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();

        }


        campo = document.getElementById('element_8');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir el nombre");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();

        }
        valor = document.getElementById("element_9").value;
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];


        if (!(/^\d{8}[A-Z]$/.test(valor))) {
            alert("debes introducir el Nif corecto");
            evento.preventDefault();

        }

        if (valor.charAt(8) != letras[(valor.substring(0, 8)) % 23]) {
            alert("debes introducir el Nif corecto");
            evento.preventDefault();

        }



        campo = document.getElementById('element_10');
        valor = campo.value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alert("debes introducir el telefono");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();

        }


        campo = document.getElementById('element_10');
        valor = campo.value;
        if (valor.length != 9) {
            alert("el telefono tiene que tener 9 caracteres");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();
        }

        campo = document.getElementById('element_20').selectedIndex;
        valor = campo.value;
        if (campo == null || campo == 0) {
            alert("debes marcar un curso");
            campo.style.backgroundColor = "red";
            campo.focus();
            evento.preventDefault();
        }
    });
};