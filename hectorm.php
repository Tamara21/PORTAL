<?php

//recibimos datos del formulario
$idusuario = $_REQUEST["idusuario"];
$hector = $_REQUEST["hector"];

//realizar la conexión a la BD
include("conectar.php");
conectarBD();

//ejecutamos la sentencia para modificar el registro
$rs = mysql_query("update acerca set acercami='$hector' where idusuario='$idusuario'") or die("Error: " . mysql_error());

if ($rs) {
    echo"<script type=\"text/javascript\">window.location='hectorA.php'; alert('Se ha actualizado exitosamente.');</script>";
} else {
    echo"<script type=\"text/javascript\">window.location='hectorA.php'; alert('Error al acualizar los datos, vuelva a verificar su información e intente de nuevo.');</script>";
}
$encontrado = "false";
?>

