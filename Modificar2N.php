
<?php
include "conectar.php";
conectarBD();
include"seguridad";
?>

<?php
error_reporting(0);
//obtenemos los datos del formulario
$id=$_REQUEST["id"];
$fecha=$_REQUEST["fecha"];
$titulo=$_REQUEST["titulo"];
$des=$_REQUEST["des"];
$ruta=$_REQUEST["ruta"];		



//obtenemos los botones

$guardar=$_REQUEST["guardar"];		
$cancelar=$_REQUEST["cancelar"];

//si el usuario presiono guardar hacemos update
if($guardar!=null){
mysql_query("update noticias set fecha='$fecha',titulo='$titulo',des='$des',ruta='$ruta' where id='$id'")
or die("Error: ".mysql_error());

echo"<script type=\"text/javascript\">window.location='listadoN.php'; alert('Se ha Modificado exitosamente.');</script>";	
}

//si presiono cancelar lo enviamos a lista
else
{
?>
<script type="text/jscript">
    window.location="listadoN.php";
</script>
<?php
}

?>
