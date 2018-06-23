<?php
$con = mysqli_connect('35.198.14.135','admin','admin');
if(!$con)
{
 echo 'No se establecio conexión con el servidor';
}
echo 'Paso 1 completo \n';
if (!mysqli_select_db ($con,'maquina'))
{
 echo 'Error al conectar con base de datos \n';
}
echo 'Empezando extracción de datos \n';
$id= $_GET["id"];
$p = $_GET['p'] ;
echo $id;
echo $p;
echo 'Conectando a base de datos \n';
$sql = "UPDATE maquina.motores SET `p`=$p WHERE `id`=$id"; // p=1
if (!mysqli_query($con,$sql))
{
 echo 'Error al insertar! Quizás sea tabla errónea!\n\r';
}
else
{
 echo 'Insertación perfecta!\r\n';
}

///////////////////////INICIO PROCESO
if(!$con)
{
 echo 'No se establecio conexión con el servidor';
}
echo 'Paso 1 completo \n';
if (!mysqli_select_db ($con,'maquina'))
{
 echo 'Error al conectar con base de datos \n';
}
$sql2 = "UPDATE maquina.motores SET `m1`='1',`m2`='1',`m3`='0' WHERE `id`=$id";


if (!mysqli_query($con,$sql2))
{
 echo 'Error al insertar! Quizás sea tabla errónea!\n\r';
}
else
{
 echo 'Insertación perfecta!\r\n';
}
/////////////////////////////////////////////////////////////7
sleep(10); // SEGUNDO PROCESO

if(!$con)
{
 echo 'No se establecio conexión con el servidor';
}
echo 'Paso 1 completo \n';
if (!mysqli_select_db ($con,'maquina'))
{
 echo 'Error al conectar con base de datos \n';
}
$sql3 = "UPDATE maquina.motores SET `m1`='1',`m2`='1',`m3`='1' WHERE `id`=$id";


if (!mysqli_query($con,$sql3))
{
 echo 'Error al insertar! Quizás sea tabla errónea!\n\r';
}
else
{
 echo 'Insertación perfecta!\r\n';
}

/////////////////////////////////////////////////////////////7
sleep(20); // TERCER PROCESO

if(!$con)
{
 echo 'No se establecio conexión con el servidor';
}
echo 'Paso 1 completo \n';
if (!mysqli_select_db ($con,'maquina'))
{
 echo 'Error al conectar con base de datos \n';
}
$sql4 = "UPDATE maquina.motores SET `m1`='1',`m2`='1',`m3`='0',`p`='0' WHERE `id`=$id";


if (!mysqli_query($con,$sql4))
{
 echo 'Error al insertar! Quizás sea tabla errónea!\n\r';
}
else
{
 echo 'Insertación perfecta!\r\n';
}

/////////////////////////////////////////////////////////////7
sleep(3); // CERRAMOS EL PROCESO

/////////////////////////////////////////////

echo "<script>window.close();</script>";?>