<?php
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    //session_start();    
    //$_SESSION['username']=$username;
    //header("Location:panel.php");

    //Conectamos base de datos
    $conexion=mysqli_connect("35.198.14.135","admin","admin","maquina");
    $consulta="SELECT * FROM usuarios WHERE usuario='$username' and clave='$pass'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
    
    if ($filas>0)
    {
        header("Location:a/A689B42D47EAD52E756D7062136C629439C269C074790B1E50597ECB2C283F9E2FEDC87A053332264BF196411AC670EA419839C443894A43B921F4914E998AAD.php");
    }
    else
    {
        echo "<h1>Error en la autentificación!</h1>";
    }
   
?>