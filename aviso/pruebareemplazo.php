<?php
include "conectar.php";
conectarBD();
include "seguridad.php";

$archivo=$_FILES['imagen']['tmp_name'];//guarda el archivo
$ruta="style/images/avisos";//nombre de la carpeta
$nombre=$_FILES['imagen']['name'];//contiene el nombre de la imagen
move_uploaded_file($archivo,$ruta."/".$nombre);
$slider=$_POST['slider'];// 
$ruta=$ruta."/".$nombre;

$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size']; 



if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg")|| strpos($tipo_archivo, "png")) 
&& ($tamano_archivo < 10000000))) { 
   	echo "<script type=\"text/javascript\">window.location='ingresaraviso.php'; 
		alert('La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .gif, .jpg o png y con un tamaño de 10MB máximo.');</script>";		  
}

else{
	if($slider=="1"){	

		$insertar=mysql_query("UPDATE avisos set nombre='".$ruta."' where id=1");	
			}

		else if($slider=="2"){	

			$insertar=mysql_query("UPDATE avisos set nombre='".$ruta."' where id=2");	
			}

			else if($slider=="3"){	

				$insertar=mysql_query("UPDATE avisos set nombre='".$ruta."' where id=3");	
			}

				else if($slider=="4"){	

					$insertar=mysql_query("UPDATE avisos set nombre='".$ruta."' where id=4");	
			}

				else if($slider=="5"){	

					$insertar=mysql_query("UPDATE avisos set nombre='".$ruta."' where id=5");	
			}


			if($insertar){
			echo"<script type=\"text/javascript\">window.location='ingresaraviso.php'; alert('Se ha subido exitosamente.');</script>";		
				}
					else{
				echo"<script type=\"text/javascript\">window.location='ingresaraviso.php'; alert('Error al subir imagen, asegurese de que el formato sea válido e intentelo de nuevo.');</script>";		
}
}


?>