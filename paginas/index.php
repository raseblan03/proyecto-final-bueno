<?php
include 'conexion.php';

var_dump($_POST);
if ($_POST['rol']=='Admin') {
    session_start();
    $_SESSION['rol']='Admin';
   
if ($_SESSION['rol']=='Admin') {

    if(!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena'])){
        
        //Recojo las variables
        $user = $connection->real_escape_string($_REQUEST['correo']);
       
        $pass =  $connection->real_escape_string($_REQUEST['contrasena']);
        //Miro con la sentencia sql si esta el usuario insertado, si lo esta creo una sesion con su nombre y lo llevo a nosotros y sino lo llevo al login 
        $sql = "SELECT email_admin  FROM tbl_admin WHERE (email_admin = '$user') and contra_admin = '{$pass}'";
      
    
    
        $query= mysqli_query($connection,$sql);
    if($query->num_rows=="1"){
           
           header("Location: ./crudalumnos.php");
        }else{
            //no existe el usuario o la contraseña esta mal
             header("Location: ./index.html");
        }
    } else{
        header("Location: ./index.html");
    }
}

    
}else {
  //Incluimos el fichero de conexion

//Si el usuario o la contraseña estan vacios lo llevo al login, sino entro 
if(!empty($_REQUEST['correo']) && !empty($_REQUEST['contrasena'])){
    //Recojo las variables
    $user = $_REQUEST['correo'];
    $pass = $_REQUEST['contrasena'];
    //Miro con la sentencia sql si esta el usuario insertado, si lo esta creo una sesion con su nombre y lo llevo a nosotros y sino lo llevo al login 
    $sql = "SELECT email_prof  FROM tbl_professor WHERE (email_prof = '$user') and contra_prof = '{$pass}'";
  


    $query= mysqli_query($connection,$sql);
if($query->num_rows=="1"){
       
        header("Location: ./crudprofes.php");
    }else{
        //no existe el usuario o la contraseña esta mal
        header("Location: ./index.html");
    }
} else{
    header("Location: ./index.html");
}
  
}
