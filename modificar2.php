
<?php
include"conectar.php";
conectarBD();
include"seguridad.php";

error_reporting(0);

//obtenemos los datos del formulario
$idusuario=$_REQUEST['idusuario'];		
$password=$_REQUEST['password'];
$nombre=$_REQUEST['nombre'];
$apellidos=$_REQUEST['apellidos'];
$email=$_REQUEST['email'];
$tipousuario=$_REQUEST['tipousuario'];

//obtenemos los botones
$guardar=$_REQUEST["guardar"];
$eliminar=$_REQUEST["eliminar"];
$cancelar=$_REQUEST["cancelar"];

//si el usuario presionó guardar, hacemos UPDATE
if($guardar!=null){

mysql_query("update usuarios set password='$password',nombre='$nombre', apellidos='$apellidos', email='$email', tipousuario=$tipousuario where idusuario='$idusuario'") or die("Error: ".mysql_error());

echo"<script type=\"text/javascript\">window.location='listado.php'; alert('Se ha actualizado exitosamente.');</script>";
}



//si el usuario presiono eliminar hacemos delete
else if($eliminar!=null){
mysql_query("delete from usuarios where idusuario='$idusuario'") or die("Error: ".mysql_error());

echo"<script type=\"text/javascript\">window.location='listado.php'; alert('Se ha eliminado exitosamente.');</script>";
}




//si presiono cancelar lo enviamos a home
else
{
echo"<script type=\"text/javascript\">window.location='listado.php';</script>";
}
