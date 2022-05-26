<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        include 'conexion.php';

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $curso = $_POST['curso'];
        $id = $_POST['id'];

        $sql = "UPDATE `tbl_alumne` SET `nom_alu` = '$nombre', `email_alu` = '$correo', `telf_alu` = '$telefono', `curso_alu` = '$curso' WHERE `tbl_alumne`.`id_alumne` = $id";
        mysqli_query($connection, $sql);

    ?>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Alumno modificado',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }

        aviso('./crudalumnos.php');
    </script>

</body>
</html>
