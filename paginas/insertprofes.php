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
        $dni = $_POST['DNI'];
         $correo = $_POST['correo'];
         $telefono = $_POST['telefono'];
        $contra = $_POST['contra'];
         $clase = $_POST['curso'];
         $comprobar= "SELECT email_prof FROM tbl_professor where email_prof="."'".$correo."'";
       
    $cons = mysqli_query($connection,$comprobar);
    
    $row = mysqli_num_rows($cons);


    $comprobar1= "SELECT dni_prof FROM tbl_professor where dni_prof="."'".$dni."'";
       
    $cons1 = mysqli_query($connection,$comprobar1);
 
    $row1 = mysqli_num_rows($cons1);

if ($row>0 || $row1>0) {
    echo "<script type=\"text/javascript\">alert(\"Usuario '$correo' o '$dni' repetido\");</script>"; 
    } else if ($row=0 && $row1=0 ) {
        $sql = "INSERT INTO tbl_professor (nom_prof, email_prof,dni_prof, telf, contra_prof,curso_prof) VALUES ('$nombre', '$correo', '$dni', '$telefono', '$contra','$clase');";
        $insert = mysqli_query($connection, $sql);
        echo "<script type=\"text/javascript\">alert(\"Usuario '$nombre' agregado correctamente\");</script>"; 
        
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

        aviso('./crudprofes.php');
    </script>
</body>
</html>
