<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<?php
//obtenemos los datos del form
$usuario=$_REQUEST['usuario'];		
$password=$_REQUEST['password'];
$nombre=$_REQUEST['nombre'];
$apellidos=$_REQUEST['apellidos'];
$email=$_REQUEST['email'];
$tipousuario=$_REQUEST['tipousuario'];


//ejecucion de la sentencia SQL
$rs=mysql_query("insert into usuarios values ('".$usuario."','".$password."','".$nombre."','".$apellidos."','".$email."','.$tipousuario.')") or die("ERROR: ".mysql_error());

if($rs){
echo"<script type=\"text/javascript\">window.location='insertar.php'; alert('Se ha insertado el usuario exitosamente.');</script>";		
}
else{
echo"<script type=\"text/javascript\">window.location='insertar.php'; alert('Error al insertar los datos, vuelva a verificar su informaci&oacute;n e intente de nuevo.');</script>";		
}
$encontrado="false";
?>