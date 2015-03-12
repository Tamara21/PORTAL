<?php
include "conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Insertar Horarios de Profesores</title>
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
                $('.forms:not(.cform)').dcSlickForms();
            });
        </script>


        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                $("#formulario").submit(function() {
                    //validamos que no esten en blanco los campos
                    if ($("#nombreprof").val().length === 0)
                    {
                        $("#errornombreprof").css("display", "inline");
                        $("#nombreprof").focus();
                        return false;
                    }
                    else {

                        $("#errornombreprof").css("display", "none");
                    }


                    //validamos que no esten en blanco los campos
                    if ($("#imagen").val().length === 0)
                    {
                        $("#errorimagen").css("display", "inline");
                        $("#imagen").focus();
                        return false;
                    }
                    else {

                        $("#errorimagen").css("display", "none");
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
                    </li>

                </ul> 

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
                <li><a href="#" class="active">Profesores</a>
                    <ul>
                        <li><a href="inserthorarioprofe.php" class="active">Ingresar horario</a></li>
                        <li><a href="listadohorarioprofes.php">Modificar horario</a></li>           
                    </ul>
                </li>
                <li><a href="#">Usuarios</a>
                    <ul>
                        <li><a href="insertar.php">Ingresar usuario</a></li>
                        <li><a href="listado.php">Lista usuario</a></li>
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


                <h2>Ingresar Nuevo Horario</h2>
                <form action="nuevoprofesor.php" method="POST" id="formulario" enctype="multipart/form-data">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">
                                    Proporciona los siguientes datos:
                                </th>
                            </tr>  
                        </thead>
                        <!-- Fin del Encabezado de la tabla -->

                        <!-- Inicio de fila -->
                        <tr>
                            <td align="rigth">Nombre completo del profesor:</td> 
                            <td align="left">
                                <input type="text" name="nombreprof" id="nombreprof" required autofocus placeholder="ejemplo: Profesor (a) Javier Tovar Rodr&iacute;guez" size="35"/>
                                <div id="errorgrupo" style="display:none;color:red">
                                    Debes ingresar el nombre del profesor
                                </div>
                            </td>      
                        </tr>
                        <!-- Fin de la fila -->

                        <!-- Inicio de fila -->
                        <tr>
                            <td align="rigth">Imagen de horario:</td> 
                            <td align="left">
                                <input type="file" name="imagen" id="imagen"/>

                                <div id="errorimagen" style="display:none;color:red">
                                    Debes subir la imagen del horario.
                                </div>
                            </td>      
                        </tr>
                        <!-- Fin de la fila -->

                        <!-- Inicio de fila -->
                        <tr>
                            <td colspan="2" align="left">
                                <input type="submit" value="Subir" class="log"/>
                            </td>      
                        </tr>
                        <!-- Fin de la fila -->

                    </table>
                </form>    

            </div>
        </div>
        <!-- End Container -->

        <div id="copyright" class="opacity">
            <p>Av. La Palma No. 125, Col. Vista Hermosa<br>
                    San Juan del Río, Qro. C.P. 76800
                    <br>
                        <p>© 2015 Portal de TIC's || Todos los derechos reservados.</p>
                        </div>
                        </div>
                        <!-- End Wrapper --> 

                        <script type="text/javascript" src="style/js/scripts.js"></script>
   </body>
</html>