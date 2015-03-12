<?php

//recibimos datos del formulario
$idusuario = $_REQUEST["idusuario"];
$fide = $_REQUEST["fide"];

//realizar la conexión a la BD
include("conectar.php");
conectarBD();

//ejecutamos la sentencia para modificar el registro
$rs = mysql_query("update acerca set acercami='$fide' where idusuario='$idusuario'") or die("Error: " . mysql_error());

if ($rs) {
    echo"<script type=\"text/javascript\">window.location='fideA.php'; alert('Se ha actualizado exitosamente.');</script>";
} else {
    echo"<script type=\"text/javascript\">window.location='fideA.php'; alert('Error al acualizar los datos, vuelva a verificar su informaci&oacute;n e intente de nuevo.');</script>";
}
$encontrado = "false";
?>

