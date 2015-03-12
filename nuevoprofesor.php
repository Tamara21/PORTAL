<?php
include "conectar.php";
conectarBD();

$archivo=$_FILES['imagen']['tmp_name'];//guarda el archivo
$ruta="style/images/imghorariosprofes";//nombre de la carpeta
$nombre=$_FILES['imagen']['name'];//contiene el nombre de la imagen
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size']; 
$nombreprof=$_POST['nombreprof'];

move_uploaded_file($archivo,$ruta."/".$nombre);
$ruta=$ruta."/".$nombre;


if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "png")) 
&& ($tamano_archivo < 10000000))) { 
echo "<script type=\"text/javascript\">window.location='inserthorarioprofe.php'; 
alert('La extension o el tamaño de los archivos no es correcta. Se permiten archivos .gif, .jpg o png.Y con un tamaño de 10 MB máximo.');</script>";

}else{
$insertar=mysql_query("INSERT INTO horarioprofesores VALUES('','".$nombreprof."','".$ruta."')");
if($insertar){
echo"<script type=\"text/javascript\">window.location='inserthorarioprofe.php'; alert('Se ha subido exitosamente.');</script>";		
}
else{
echo"<script type=\"text/javascript\">window.location='inserthorarioprofe.php'; 
alert('Error al subir horario, asegurese de que el formato sea valido e intentelo de nuevo.');</script>";		
}

}
?>