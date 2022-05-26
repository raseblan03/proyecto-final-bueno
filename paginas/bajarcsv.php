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

$comprobar= "SELECT * FROM tbl_alumne;";
$cons = mysqli_query($connection,$comprobar);

if(!file_exists("datosbajados.csv")){
    file_put_contents("datosbajados.csv","Nombre;Correo;Telefono;curso \n");
} 
foreach ($cons as $value) {

file_put_contents("datosbajados.csv","{$value['nom_alu']};{$value['email_alu']};{$value['telf_alu']};{$value['curso_alu']} \n",FILE_APPEND);

}


    ?>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function aviso(url) {
                Swal.fire({
                        title: 'Proceso terminado',
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