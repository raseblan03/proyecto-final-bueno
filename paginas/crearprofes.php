<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/crear.css">
    <script type="text/javascript" src="../js/validaprofes.js"></script>
</head>
<body>


    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>CREACION<br>DE UN PROFESOR</h2>
            </section>
            <section class="info_items">
                <img src="../img/51132-606ae6bc24374b968a4756cc0b7e2dae.png" alt="">
            </section>
        <br>
        <br>
       
        </section>
       
        <form action="./insertprofes.php" class="form_contact" method="post">
            <div class="user_info">
                <label for="names">Nombres</label>
                <input type="text" name="nombre" id="element_11" >

                <label for="email">Correo electronico (ejemplo@gmail.com)</label>
                <input type="text" name="correo" id="element_12">

                <label for="DNI">DNI (8 caracteres y 1 letra)</label>
                <input type="text" name="DNI" id="element_13">

                <label for="phone">Telefono (9 numeros)</label>
                <input type="number" name="telefono" id="element_14">
                <label>Contraseña (8 caracteres y letras)</label>
                <input type="password" name="contra" id="element_15">

                <label for="curso">Curso</label>
                <select name="curso"  id="element_21" >
                    <option value="" selected="selected"></option>
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
              <input type="submit" value="Crear" id="btnSend">  
            </div>
            
        </form>

    <button class="letra" onclick="location.href='crudprofes.php'">v<br>o<br>l<br>v<br>e<br>r</button>
    </section>



</body>
</html>