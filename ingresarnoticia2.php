<?php
include "conectar.php";
conectarBD();
include"seguridad.php";

$archivo=$_FILES['imagen']['tmp_name'];//guarda el archivo
$ruta="style/images/noticias";//nombre de la carpeta
$nombre=$_FILES['imagen']['name'];//contiene el nombre de la imagen
$titulo=$_POST['titulo'];
$desc=$_POST['desc'];
$fecha=$_POST['fecha'];
move_uploaded_file($archivo,$ruta."/".$nombre);
$ruta=$ruta."/".$nombre;

$insertar=mysql_query("INSERT INTO noticias VALUES('','".$fecha."','".$titulo."','".$desc."','".$ruta."')");

if($insertar){
echo"<script type=\"text/javascript\">window.location='listadoN.php'; alert('Se ha subido exitosamente.');</script>";		
}
else{
echo"<script type=\"text/javascript\">window.location='ingresarnoticia.php'; alert('Error al subir imagen, asegurese de que el formato sea válido e intentelo de nuevo.');</script>";		
}


?>