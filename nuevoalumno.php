<?php
include "conectar.php";
conectarBD();

$archivo=$_FILES['imagen']['tmp_name'];//guarda el archivo
$ruta="style/images/imghorariosalum";//nombre de la carpeta
$nombre=$_FILES['imagen']['name'];//contiene el nombre de la imagen
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size']; 
$grupo=$_POST['grupo'];

move_uploaded_file($archivo,$ruta."/".$nombre);
$ruta=$ruta."/".$nombre;


if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg")|| 
strpos($tipo_archivo, "png")) && ($tamano_archivo < 10000000))) { 
echo "<script type=\"text/javascript\">window.location='inserthorarioalumno.php'; 
alert('La extension o el tamanio de los archivos no es correcta. Se permiten archivos .gif, .jpg o png<br>Y con un tamanio de 10 MB maximo.');</script>";		  
}else{
$insertar=mysql_query("INSERT INTO horarioalumnos VALUES('','".$grupo."','".$ruta."')");
if($insertar){
echo"<script type=\"text/javascript\">window.location='inserthorarioalumno.php'; alert('Se ha subido exitosamente.');</script>";		
}
else{
echo"<script type=\"text/javascript\">window.location='inserthorarioalumno.php'; 
alert('Error al subir horario, asegurese de que el formato sea valido e intentelo de nuevo.');</script>";		
}

}
?>