<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/crear.css">
</head>
<body>
    <?php

include 'conexion.php';
$sql = "SELECT * FROM tbl_alumne WHERE id_alumne={$_GET['id']}";
$result = mysqli_query($connection, $sql);
$alumno = mysqli_fetch_array($result, MYSQLI_ASSOC);
$profes = mysqli_fetch_array($result, MYSQLI_ASSOC);

    ?>

    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>MODIFICAR<br>UN ALUMNO</h2>
            </section>
            <section class="info_items">
                <img src="../img/51132-606ae6bc24374b968a4756cc0b7e2dae.png" alt="">
            </section>
        </section>

        <form action="./updatealumnos.php" class="form_contact" method="post">
            <div class="user_info">
                <label for="names">Nombres</label>
                <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $alumno['nom_alu']; ?>">

                <label for="email">Correo electronico</label>
                <input type="email" name="correo" placeholder="Correo" value="<?php echo $alumno['email_alu']; ?>">

                <label for="phone">Telefono</label>
                <input type="number" name="telefono" placeholder="Telefono" value="<?php echo $alumno['telf_alu']; ?>">

                <label for="curso">Curso</label>
                <input type="text" name="curso" placeholder="Curso" value="<?php echo $alumno['curso_alu']; ?>">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <input type="submit" value="Modificar" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
