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
    $id = $_GET['id'];
    $sql = "DELETE FROM `tbl_alumne` WHERE `tbl_alumne`.`id_alumne` = $id";
    $result = mysqli_query($connection, $sql);
    
    // header("location:index.php"); 
    
    echo "<script>window.location.href = 'crudalumnos.php'</script>";

      
        $sql = " SELECT * FROM tbl_alumne WHERE id={$_GET['id']}";
        $result = mysqli_query($connection, $sql);
        $alumno = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $profes = mysqli_fetch_array($result, MYSQLI_ASSOC);

    ?>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario borrado',
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