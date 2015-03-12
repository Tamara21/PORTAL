<?php
include "conectar.php";
conectarBD();
include"seguridad.php";
?>

<?php
error_reporting(0);
//obtenemos los datos del formulario
$id=$_REQUEST["id"];
$nombreprof=$_REQUEST["nombreprof"];
$ruta=$_REQUEST["ruta"];

//especficamos la ruta
$archivo=$_FILES['ruta']['tmp_name'];//guarda el archivo


move_uploaded_file($archivo,$ruta);

//obtenemos los botones

$guardar=$_REQUEST["guardar"];
$eliminar=$_REQUEST["eliminar"];
$cancelar=$_REQUEST["cancelar"];

//si el usuario presiono guardar hacemos update
if($guardar!=null){
mysql_query("update horarioprofesores set nombreprof='$nombreprof',ruta='$ruta'
where id=$id")
or die("Error: ".mysql_error());

echo"<script type=\"text/javascript\">window.location='listadohorarioprofes.php'; alert('Se ha actualizado exitosamente.');</script>";	
}
//si el usuario presiono eliminar hacemos delete
else if($eliminar!=null){
mysql_query("delete from horarioprofesores where id=$id")
or die("Error: ".mysql_error());
echo"<script type=\"text/javascript\">window.location='listadohorarioprofes.php'; alert('Se elimino el registro exitosamente.');</script>";	
}

//si presiono cancelar lo enviamos a home
else
{
?>
<script type="text/jscript">
    window.location="listadohorarioprofes.php";
</script>
<?php
}

?>
