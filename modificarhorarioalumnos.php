





<?php
include "conectar.php";
conectarBD();
include"seguridad";
?>

<?php
error_reporting(0);
//obtenemos los datos del formulario
$id=$_REQUEST["id"];
$grupo=$_REQUEST["grupo"];
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
mysql_query("update horariosalumno set grupo='$grupo',ruta='$ruta'
where id=$id")
or die("Error: ".mysql_error());

echo"<script type=\"text/javascript\">window.location='listadohorarioalumnos.php'; alert('Se ha actualizado exitosamente.');</script>";	
}
//si el usuario presiono eliminar hacemos delete
else if($eliminar!=null){
mysql_query("delete from horariosalumno where id=$id")
or die("Error: ".mysql_error());
echo"<script type=\"text/javascript\">window.location='listadohorarioalumnos.php'; alert('Se elimino el registro exitosamente.');</script>";	
}

//si presiono cancelar lo enviamos a lista
else
{
?>
<script type="text/jscript">
    window.location="listadohorarioalumnos.php";
</script>
<?php
}

?>



