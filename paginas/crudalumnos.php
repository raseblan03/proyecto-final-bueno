<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Document</title>
    <link rel="stylesheet" href="../css/crud.css">
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
   
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a href="#" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true" type="button">Alumno</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="./crudprofes.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Profesor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" role="search">
       <a href="logout.php"> <button class="btn btn-outline-success" type="button">Log Out</button></a>
      </form>
    </div>
  </div>
</nav>

<!-- <ul id="menuhorizontal">
<a href="./crudalumnos.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true" type="button">Alumno</a>
<a href="#" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Profesor</a>

</ul> -->
<br>
<br>
<br>


    <?php



    include 'conexion.php';
    session_start();
    if ($_SESSION['rol']==true) {
       
    $sql = "SELECT * FROM tbl_alumne;";
    $listadodept = mysqli_query($connection, $sql);
    
?>
    <form action="crudalumnos.php" method="GET">
    <div class="filtro" >
       
            <input type="text" name="nombre1" placeholder="Nombre">
            <!-- <a href="./crudprofes.php" class="boton_personalizado" name="filtros" type="button">Filtrar</a> -->
           <a href="crudalumnos.php"> <input type="submit" value="Filtrar" name="enviar" class="boton_personalizado"></a>
           <td class="boton"><a href="./crudalumnos.php" class="btn btn-primary" name="volver" >quitar filtros</a></td>
           
        </form>
    </div>
    <div class="mostrar_productos">
<?php
if (isset($_GET['nombre1'])) {
    $search=$_GET['nombre1'];
    $listadodept = mysqli_query($connection, $sql);
      $sql20 = "SELECT  id_alumne, nom_alu,email_alu,dni_alu,telf_alu,curso_alu
      FROM tbl_alumne
      WHERE  nom_alu  Like "."'".'%'.$search.'%'. "'" ;
   $listadodept1 = mysqli_query($connection, $sql20);
    
    if (mysqli_num_rows( $listadodept1)==0) {
      ?>
<script>
alert ("No hay registros que coincidan con tus filtros")
                aviso('crudalumnos.php');
                </script>
   
  
  <?php
   }
 
  }

  
    

   

    echo '<a href="./crearalumno.php" class="btn btn-success btn-lg" role="button" aria-disabled="true">Crear</a>';
    echo "<br>";
    echo "<br>";
    echo '<a href="./bajarcsv.php" class="btn btn-success btn-lg" role="button" aria-disabled="true">BAJAR BASE DE DATOS</a>';

    echo '<table class="tabla">';
    echo '<tr>';
    echo '<br>';

  

        // $id = $_GET['id'];
        // $sql = "SELECT FROM `tbl_professor` WHERE `tbl_professor`.`id_professor` = $id";
        // $result = mysqli_query($connection, $sql);
        // mysqli_set_charset($connection);

        //     /*  Agregue tipo de listado de acuerdo al Select  */
        //     if( !isset($_POST['id_professor']) ){
        //           $peticion = "SELECT * FROM tbl_professor";
        //         }else{
        //             if ( $_POST['id_professor'] == "1" ){
        //                 $peticion = "SELECT * FROM tbl_professor  order by nom_prof asc";
        //             }
        //             if ( $_POST['id_professor'] == "2" ){
        //                 $peticion = "SELECT * FROM tbl_professor  order by email_prof desc";
        //             }
        //             if ( $_POST['id_professor'] == "3" ){
        //                 $peticion = "SELECT * FROM tbl_professor  order by dni_prof asc";
        //             }
        //             if ( $_POST['id_professor'] == "4" ){
        //                 $peticion = "SELECT * FROM tbl_professor  order by telf desc";
        //             }
        //         }


        // $resultado = mysqli_query($conexion, $peticion);

        // while ($fila = mysqli_fetch_array($resultado)) {
        //     echo "<div class='col-md-3 producto_individual'>";
        //     $peticion2 = "SELECT * FROM producto WHERE id_professor = " .$fila["id_professor"] . " ";
        //     $resultado2 = mysqli_query($conexion, $peticion2);

        //     echo "<h2>" . $fila['nom_prof'] . "</h2>";
        //     echo "<p>" . $fila['email_prof'] . "</p>";
        //     echo "<p> " . $fila['dni_prof'] . " </p>";
        //     echo "<p> " . $fila['telf'] . " </p>";
        //     echo "<a class='btn btn-danger' href='producto_individual.php?id_producto=" .$fila["id_professor"]. "'><strong>Ver más</strong></a></p></div>";

        // }

        // mysqli_close($conexion);
    ?>              
 </div>
    <?php

if (isset($_GET['nombre1'])) {
    # code...

    echo '</table>';


    echo '<table>';
    echo '<tr>';
    echo '<th class="tabla">Nombre</th>';
    echo '<th class="tabla">Correo</th>';
    echo '<th class="tabla">DNI</th>';
    echo '<th class="tabla">Telefono</th>';
    echo '<th class="tabla">Curso</th>';
    echo '<th class="tabla">Borrar</th>';
    echo '<th class="tabla">Modificar</th>';
    echo '<th class="tabla">Email</th>';
    echo '</tr>';
    foreach ($listadodept1 as $profes) {
        echo '<tr>';
        echo "<td class='usuario'>{$profes['nom_alu']}</td>";
        echo "<td class='usuario'>{$profes['email_alu']}</td>";
        echo "<td class='usuario'>{$profes['dni_alu']}</td>";
        echo "<td class='usuario'>{$profes['telf_alu']}</td>";
        echo "<td class='usuario'>{$profes['curso_alu']}</td>";
        
       
        ?>
         <td class="boton"><button class="btn btn-danger" onClick="aviso('borraralumnos.php?id=<?php echo $profes['id_alumne']; ?>');">Borrar</button></td>
         <td class="boton"><button class="btn btn-primary" onClick="aviso('modificaralumnos.php?id=<?php echo $profes['id_alumne']; ?>');">Modificar</button></td>
         <td class="boton"><button class="btn btn-primary" onClick="aviso('enviaremail.php');">Email</button></td>
        </tr>
     <?php
    }
    echo '</table>';
} else {


    echo '</table>';


    echo '<table>';
    echo '<tr>';
    echo '<th class="tabla">Nombre</th>';
    echo '<th class="tabla">Correo</th>';
    echo '<th class="tabla">DNI</th>';
    echo '<th class="tabla">Telefono</th>';
    echo '<th class="tabla">Curso</th>';
    echo '<th class="tabla">Borrar</th>';
    echo '<th class="tabla">Modificar</th>';
    echo '<th class="tabla">Email</th>';
    echo '</tr>';
    foreach ($listadodept as $alumno) {
        echo '<tr>';
        echo "<td class='usuario'>{$alumno['nom_alu']}</td>";
        echo "<td class='usuario'>{$alumno['email_alu']}</td>";
        echo "<td class='usuario'>{$alumno['dni_alu']}</td>";
        echo "<td class='usuario'>{$alumno['telf_alu']}</td>";
        echo "<td class='usuario'>{$alumno['curso_alu']}</td>";
        
       
        ?>
         <td class="boton"><button class="btn btn-danger" onClick="aviso('borraralumnos.php?id=<?php echo $alumno['id_alumne']; ?>');">Borrar</button></td>
         <td class="boton"><button class="btn btn-primary" onClick="aviso('modificaralumnos.php?id=<?php echo $alumno['id_alumne']; ?>');">Modificar</button></td>
         <td class="boton"><button class="btn btn-primary" onClick="aviso('enviaremail.php');">Email</button></td>
        </tr>
     <?php
    }
    echo '</table>';
  



}

    ?>
 
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    function aviso(url) {
        Swal.fire({
            title: '¿Estas seguro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
            })
    }

</script>
<?php
    }else {
      $sql = "SELECT * FROM tbl_alumne;";
      $listadodept = mysqli_query($connection, $sql);
   
        
      ?>
      <form action="crudalumnos.php" method="GET">
      <div class="filtro" >
         
              <input type="text" name="nombre2" placeholder="Nombre">
              <a href="crudalumnos.php"> <input type="submit" value="Filtrar" name="enviar" class="boton_personalizado"></a>
           <td class="boton"><a href="./crudalumnos.php" class="btn btn-primary" name="volver" >quitar filtros</a></td>
              <!-- <input type="submit" value="Filtrar" name="enviar"> -->
          </form>

      </div>
   
      <div class="mostrar_productos">
  <?php
  if (isset($_GET['nombre2'])) {
    $search=$_GET['nombre2'];
               
    $sql20 = "SELECT  id_alumne, nom_alu,email_alu,dni_alu,telf_alu,curso_alu
    FROM tbl_alumne
    WHERE  nom_alu  Like "."'".'%'.$search.'%'. "'" ;
$listadodept1 = mysqli_query($connection, $sql20);
if (mysqli_num_rows( $listadodept1)==0) {
    ?>
<script>
alert ("No hay registros que coincidan con tus filtros")
              aviso('crudalumnos.php');
              </script>
 

<?php
  }
}
              
     
if (isset($_GET['nombre2'])) {
    # code...


    echo '</table>';


    echo '<table>';
    echo '<tr>';
    echo '<th class="tabla">Nombre</th>';
    echo '<th class="tabla">Correo</th>';
    echo '<th class="tabla">DNI</th>';
    echo '<th class="tabla">Telefono</th>';
    echo '<th class="tabla">Curso</th>';

    echo '</tr>';
    foreach ($listadodept1 as $profes) {
        echo '<tr>';
        echo "<td class='usuario'>{$profes['nom_alu']}</td>";
        echo "<td class='usuario'>{$profes['email_alu']}</td>";
        echo "<td class='usuario'>{$profes['dni_alu']}</td>";
        echo "<td class='usuario'>{$profes['telf_alu']}</td>";
        echo "<td class='usuario'>{$profes['curso_alu']}</td>";
        
       
        ?>
     
        <?php
    }
    echo '</table>';
} else {


    echo '</table>';


    echo '<table>';
    echo '<tr>';
    echo '<th class="tabla">Nombre</th>';
    echo '<th class="tabla">Correo</th>';
    echo '<th class="tabla">DNI</th>';
    echo '<th class="tabla">Telefono</th>';
    echo '<th class="tabla">Curso</th>';

    echo '</tr>';
    foreach ($listadodept as $alumno) {
        echo '<tr>';
        echo "<td class='usuario'>{$alumno['nom_alu']}</td>";
        echo "<td class='usuario'>{$alumno['email_alu']}</td>";
        echo "<td class='usuario'>{$alumno['dni_alu']}</td>";
        echo "<td class='usuario'>{$alumno['telf_alu']}</td>";
        echo "<td class='usuario'>{$alumno['curso_alu']}</td>";
        
       
        ?>
       
     <?php
    }
    echo '</table>';
}
  }
      ?>
   
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script>
  
      function aviso(url) {
          Swal.fire({
              title: '¿Estas seguro?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
              }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = url;
              }
              })
      }
  
  </script>
  <?php
    
    ?>



</body>
</html>