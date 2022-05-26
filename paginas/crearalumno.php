<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/crear.css">
    <script type="text/javascript" src="../js/validaalumnos.js"></script>
</head>
<body>
    <?php
include 'conexion.php';

// $comprobar= "SELECT email_alu FROM tbl_alumne;";
// $cons = mysqli_query($connection,$comprobar);
// $lista_emails=array();

// while ($fila = mysqli_fetch_assoc($cons)){
//     $lista_emails[]=$fila['email_alu']; 
// }

   
 
?>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>CREACION<br>DE UN ALUMNO</h2>
            </section>
            <section class="info_items">
                <img src="../img/51132-606ae6bc24374b968a4756cc0b7e2dae.png" alt="">
            </section>
        </section>

        <form action="./insertalumno.php" class="form_contact" method="post">
            <div class="user_info">
                <label for="names">Nombres</label>
                <input type="text" name="nombre" id="element_8">

                <label for="email">Correo electronico</label>
                <input type="text" name="correo"  id="element_6">

                <label for="DNI">DNI (8 caracteres y 1 letra)</label>
                <input type="text" name="DNI"  id="element_9">

                <label for="phone">Telefono (9 caracteres)</label>
                <input type="number" name="telefono"  id="element_10">
                <label>Contraseña (8 caracteres y letras)</label>
                <input type="password" name="contra"  id="element_7">

                <label for="curso">Curso</label>
                <select name="curso" id="element_20">
                    <option value="" selected="selected" ></option>
        <option value="ASIX1"  >ASIX1</option>
        <option value="ASIX2" >ASIX2</option>
        <option value="DAW1" >DAW1</option>
        <option value="DAW2" >DAW2</option>
        <option value="GUIA" >GUIA</option>
        <option value="KAY" >KAY</option>
        <option value="ESIC" >ESIC</option>
        <option value="OTROS" >OTROS</option>
        <br>
        <br>
    
        

          

                <input type="submit" value="Crear"  id="element_40">
            </div>
        </form>
        <button class="letra" onclick="location.href='crudalumnos.php'">v<br>o<br>l<br>v<br>e<br>r</button>
    </section>

</body>
</html>