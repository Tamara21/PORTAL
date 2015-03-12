<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Portal TIC</title>
        <link rel="shortcut icon" type="image/x-icon" href="style/images/fav.png" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/color/red.css" media="all" />
        <link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css"  />
        <link rel="stylesheet" type="text/css" href="style/type/museo.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/ptsans.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/charis.css" media="all" />
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
        <![endif]-->
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
        <![endif]-->
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="style/js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="style/js/transify.js"></script>
        <script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
        <script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.forms').dcSlickForms();
            });
        </script>        
        <script>
            $(document).ready(function() {
                $("#formulario").submit(function() {

                    //validar que los campos no estén en blanco el id usuario 
                    if ($("#idusuario").val().length == 0) {
                        $("#errorUsuario").css("display", "inline");
                        $("#idusuario").focus();
                        return false;
                    }
                    else {
                        $("#errorUsuario").css("display", "none");
                    }

                    //validamos el password
                    if ($("#password").val().length == 0) {
                        $("#errorPassword").css("display", "inline");
                        $("#password").focus();
                        return false;
                    }
                    else {
                        $("#errorPassword").css("display", "none");
                    }

                    //validamos el la confirmacion de password 
                    if ($("#password2").val().length == 0) {
                        $("#errorPassword2").css("display", "inline");
                        $("#password2").focus();
                        return false;
                    }
                    else {
                        $("#errorPassword2").css("display", "none");
                    }

                    //verificamos que las contraseñas coincidan
                    if ($("#password").val() != $("#password2").val()) {
                        $("#errorPassword1").css("display", "inline");
                        $("#password").focus();
                        return false;
                    }
                    else {
                        $("#errorPassword1").css("display", "none");
                    }

                    //validamos el nombre
                    if ($("#nombre").val().length == 0) {
                        $("#errorNombre").css("display", "inline");
                        $("#nombre").focus();
                        return false;
                    }
                    else {
                        $("#errorNombre").css("display", "none");

                    }

                    //validamos los apellidos
                    if ($("#apellidos").val().length == 0) {
                        $("#errorApellido").css("display", "inline");
                        $("#apellidos").focus();
                        return false;
                    }
                    else {
                        $("#errorApellido").css("display", "none");
                    }

                    //validamos el tipo de usuario
                    if ($("#tipousuario option:selected").val() == "--") {
                        $("#errorTipo").css("display", "inline");
                        $("#tipousuario").focus();
                        return false;
                    }
                    else {
                        $("#errorTipo").css("display", "none");
                    }
                    return true;
                });
            });
        </script>
    </head>
    <body>
        <!-- Fullscreen backgrounds -->
        <div id="thumbs">
            <a href="style/images/art/bg1.jpg">1</a>
            <a href="style/images/art/bg2.jpg">2</a>
            <a href="style/images/art/bg3.jpg">3</a>
            <a href="style/images/art/bg4.jpg">4</a>
            <a href="style/images/art/bg5.jpg">5</a>
            <a href="style/images/art/bg6.jpg">6</a>
        </div>
        <div id="superbgimage">
            <div class="scanlines"></div>
        </div>
        <!-- End Fullscreen backgrounds -->
        <!-- Begin Wrapper -->
        <div id="wrapper">
            <div id="header">
                <div class="logo"><a href="index.html"><img src="style/images/logo.png" alt="" /></a></div>
                <div class="social">
                    <ul>
                        <div class="box">
                            <div class="container-1">
                                <form method="get" action="http://www.google.com.mx/search">
                                    <input type="search" id="search" placeholder="Buscar..." name="q" results="5"/>
                                    <input type="hidden" name="sitesearch" value="www.utsjr.edu.mx"/>
                                </form>
                            </div>
                        </div>      
                        <li><a href="https://www.facebook.com/profile.php?id=100009031561890&fref=ts"><img src="style/images/icon-facebook.png" alt="Facebook" /></a></li>
                        <li><a href="https://twitter.com/TICS_UTSJR"><img src="style/images/icon-twitter.png" alt="Twitter" /></a></li>       

                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Begin Menu -->
            <div id="menu" class="menu opacity">
                <ul>
                    <li><a href="#">Avisos</a>
                        <ul>
                            <li><a href="ingresaraviso.php">Ingresar aviso</a></li>	      	  
                        </ul> 
                    </li>

                    <li><a href="#">Noticias</a>
                        <ul>
                            <li><a href="ingresarnoticia.php">Ingresar noticia</a></li>
                            <li><a href="listadoN.php">Modificar noticia</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Alumno</a>
                        <ul>
                            <li><a href="inserthorarioalumno.php">Ingresar horario</a></li>
                            <li><a href="listadohorarioalumnos.php">Modificar horario</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Profesores</a>
                        <ul>
                            <li><a href="perfiles.html" >Perfiles</a></li>
                            <li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
                            <li><a href="listadohorarioprofes.php">Modificar horario</a></li>           
                        </ul>
                    </li>
                    <li><a href="#" class="active">Usuarios</a>
                        <ul>
                            <li><a href="insertar.php">Ingresar usuario</a></li>
                            <li><a href="listado.php" class="active">Lista usuario</a></li>
                            <li><a href="buscar.php">Buscar usuario</a></li>                
                        </ul>
                    </li>
                    <li><a href="salir.php">Cerrar sesi&oacute;n</a></li>     
                </ul>
                <br style="clear: left" />
            </div>
            <!-- End Menu --> 


            <!-- Begin Container -->
            <div id="container" class="opacity">
                <div class="full-width">

                    <div class="two-third last">
                        <h2>Lista de Usuarios</h2>                       
                        <div class="form-container">

                            <?php

                            //ejecutamos la sentencia sql
                            $rs=mysql_query("select * from usuarios") or die("Error: ".mysql_error());
                            ?>

                            <table id="tabla" widht="900px" border="0">
                                <tr>
                                    <td id="letra" width="100">ID Usuarios</td>
                                    <td id="letra" width="200">Nombre</td>
                                    <td id="letra" width="200">Apellidos</td>
                                    <td id="letra" width="200">E-mail</td>
                                    <td id="letra" width="200">Tipo Usuarios</td>
                                </tr>
                                <?php
                                while($row=mysql_fetch_array($rs)){

                                $idusuario=$row["idusuario"];
                                $pagina="modificar.php?idusuario=$idusuario";

                                echo "<tr>";
                                echo "<td><a href=$pagina>".$row["idusuario"]."</a></td>";
                                echo "<td>".$row["nombre"]."</td>";
                                echo "<td>".$row["apellidos"]."</td>";
                                echo "<td>".$row["email"]."</td>";
                                echo "<td>".$row["tipousuario"]."</td>";
                                echo "</tr>";
                                }

                                mysql_free_result($rs);
                                ?>
                            </table>
                            <br/>
                            <p>
                                <a href="profesores.php">Regresar</a>
                            </p>
                            <div class="response"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- End Full Width -->

                <div class="clear"></div>
                <div id="footer">
                    <div class="footer-top"></div>
                    <!-- Divider -->


                    <div class="clear"></div>
                </div>
            </div>
            <!-- End Container -->

            <div id="copyright" class="opacity">
                <p>Av. La Palma No. 125, Col. Vista Hermosa </p>        
                <p>San Juan del R&iacute;o, Qro. C.P. 76800</p>
                <br>
                <p>&copy;2015 Portal de TIC's || Todos los derechos reservados</p>
            </div>
        </div>
        <!-- End Wrapper --> 

        <script type="text/javascript" src="style/js/scripts.js"></script>
    </body>
</html>
