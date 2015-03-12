<?php
	//obtener los datos del formulario
	$usuario=$_REQUEST["usuario"];
	$password=$_REQUEST["password"];
	

	
	//hacemos conexion con la base de datos
	include("conectar.php");
	conectarBD();
	
	//hacemos un query para verificar si los datos son correctos
	$rs=mysql_query("select * from usuarios where idusuario='$usuario' and password='$password'");
	
	//comparamos las filas obtenidas y direccionamos
	if(mysql_num_rows($rs)!=0){
		$row=mysql_fetch_array($rs);
		$tipo=$row["tipousuario"];
		session_start();
		 $_SESSION["autentificado"]="si";		 
		 if($tipo==2){
			 if($usuario=="gmendozah"){
				echo "<script type=\"text/javascript\">
					     window.location='memoA.php';
						alert('Bienvenido Maestro Guillermo, ha iniciado sesión');</script>";			
						 }
			 else if($usuario=="acortesg"){				
					echo "<script type=\"text/javascript\">
					     window.location='aliciaA.php';
						alert('Bienvenida Maestra Alicia, ha iniciado sesión');</script>";
			 }
			 
			 else if($usuario=="acvalenciag"){
				echo "<script type=\"text/javascript\">
					     window.location='alexA.php';
						alert('Bienvenido Maestro Alejandro, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="bjuarezs"){
				echo "<script type=\"text/javascript\">
					     window.location='brendaA.php';
						alert('Bienvenida Maestra Brenda, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="fdiazm"){
				echo "<script type=\"text/javascript\">
					     window.location='fideA.php';
						alert('Bienvenido Director Ing.Fidencio, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="grodriguezm"){
				echo "<script type=\"text/javascript\">
					     window.location='goyoA.php';
						alert('Bienvenido Maestro Gregorio, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="hsaldanab"){
				echo "<script type=\"text/javascript\">
					     window.location='hectorA.php';
						alert('Bienvenido Maestro Hector, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="magonzalezp"){
				echo "<script type=\"text/javascript\">
					     window.location='miguelA.php';
						alert('Bienvenido Maestro Miguel Ángel, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="mmoralesr"){
				echo "<script type=\"text/javascript\">
					     window.location='marisolA.php';
						alert('Bienvenida Maestra Marisol, ha iniciado sesión');</script>";		
			 }
			 
			 else if($usuario=="nledesma"){
				echo "<script type=\"text/javascript\">
					     window.location='normaA.php';
						alert('Bienvenida Maestra Norma, ha iniciado sesión');</script>";		
			 }
			 else if($usuario=="ragonzalezn"){
				echo "<script type=\"text/javascript\">
					     window.location='rafaA.php';
						alert('Bienvenida Maestra Norma, ha iniciado sesión');</script>";		
			 }
			 
			  else if($usuario=="dllopeza"){
				echo "<script type=\"text/javascript\">
					     window.location='doraA.php';
						alert('Bienvenida Maestra Dora, ha iniciado sesión');</script>";		
			 }			 
		
                        }else{

			 echo "<script type=\"text/javascript\">
					     window.location='profesores2.php';
						alert('Bienvenido Administrador Rene, ha iniciado sesión');</script>";
			 }

			}
			else{
			header("Location: proflogin.php?errorusuario=si");
			}
			
			mysql_free_result($rs);
	
?>