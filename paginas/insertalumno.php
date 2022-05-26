<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>

    <?php

        // include 'conexion.php';



        // //RECUPERAR DATOS
        // $nombre = $_POST['nombre'];
        // $dni = $_POST['DNI'];
        // $correo = $_POST['correo'];
        // $telefono = $_POST['telefono'];
        // $contra = $_POST['contra'];
        // $clase = $_POST['curso'];


        // $sql = "INSERT INTO `tbl_alumne` (`id_alumne`, `dni_alu`, `contra_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `curso_alu`) VALUES
        //  (NULL, '$dni', '$contra', '$nombre', NULL, NULL, '$telefono', '$correo', '$clase')";
   
        // $insert = mysqli_query($connection, $sql);

    ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Alumno creado',
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
</html> -->
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
         $comprobar= "SELECT email_alu FROM tbl_alumne where email_alu="."'".$correo."'";
       
    $cons = mysqli_query($connection,$comprobar);
 
    $row = mysqli_num_rows($cons);

if ($row>0) {
    echo "<script type=\"text/javascript\">alert(\"Usuario '$nombre' repetido\");</script>"; 
    } else{
        $sql = "INSERT INTO tbl_alumne (nom_alu, email_alu,dni_alu, telf_alu, contra_alu,curso_alu) VALUES ('$nombre', '$correo', '$dni', '$telefono', '$contra','$clase');";
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

        aviso('./crudalumnos.php');
    </script>
</body>
</html>