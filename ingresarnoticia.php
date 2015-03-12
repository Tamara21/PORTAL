<?php
include "conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Noticias</title>
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
                    //validamos que no esten en blanco los campos

                    if ($("#titulo").val() === 0) {
                        $("#errortitulo").css("display", "inline");
                        $("#titulo").focus();

                        return false;
                    }
                    else {
                        $("#errortitulo").css("display", "none");

                    }
                    /////////////////////////////////////////////

                    if ($("#fecha").val() === "0") {
                        $("#errorfecha").css("display", "inline");
                        $("#fecha").focus();

                        return false;
                    }
                    else {
                        $("#errorfecha").css("display", "none");

                    }
                    /////////////////////////////////////////////

                    if ($("#desc").val() === "0") {
                        $("#errorarea").css("display", "inline");
                        $("#desc").focus();

                        return false;
                    }
                    else {
                        $("#errorarea").css("display", "none");

                    }
                    /////////////////////////////////////////////

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
                        <li><a href="#"><img src="style/images/icon-facebook.png" alt="Facebook" /></a></li>
                        <li><a href="#"><img src="style/images/icon-twitter.png" alt="Twitter" /></a></li>

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

                <li><a href="#" class="active">Noticias</a>
                    <ul>
                        <li><a href="ingresarnoticia.php" class="active">Ingresar noticia</a></li>
                        <li><a href="listadoN.php">Modificar noticia</a></li>
                    </ul>
                </li>
                <li><a href="#">Alumno</a>
                    <ul>
                        <li><a href="inserthorarioalumno.php">Ingresar horario</a></li>
                        <li><a href="listdohorarioalumnos.php">Modificar horario</a></li>
                    </ul>
                </li>
                <li><a href="#">Profesores</a>
                    <ul>
                        <li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
                        <li><a href="listadohorarioprofes.php">Modificar horario</a></li>           
                    </ul>
                </li>
                <li><a href="#">Usuarios</a>
                    <ul>
                        <li><a href="insertar.php">Ingresar usuario</a></li>
                        <li><a href="listado.php">Modificar usuario</a></li>
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

                <!-- Begin Blog -->
                <div class="blog"> 

                    <!-- Begin form -->
                    <form method="post" id="noticia" action="ingresarnoticia2.php" enctype="multipart/form-data">

                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">
                            <h1>Ingresar nueva noticia</h1> 
                            <h3>Para una visualiaci&oacute;n completa, seleccione una imagen con propiedades: </h3>
                            <p>Anchura: 600 pixeles</p>
                            <p>Altura: 300 pixeles</p>
                            </th>
                            </tr>  
                            </thead>
                            <!-- Fin del Encabezado de la tabla -->
                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Ingresa el t&iacute;tulo:</td> 
                                <td align="left">
                                    <input type="text" id="titulo" name="titulo" maxlength="500" required autofocus placeholder="ej. Mi Título"/>
                                    <div id="errortitulo" style="display:none;color:red">
                                        Debes ingresar un t&iacute;tulo
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->

                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Ingresa la fecha y hora:</td> 
                                <td align="left">
                                    <input type="datetime-local" id="fecha" name="fecha" required autocomplete="on"/>
                                    <div id="errorfecha" style="display:none;color:red">
                                        Debes seleccionar una fecha y hora.
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->

                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Ingrese la descripci&oacute;n</td> 
                                <td align="left">
                                    <textarea cols="30" rows="15" name="desc" required>
                                    </textarea>
                                    <div id="errorarea" style="display:none;color:red">
                                        Debes seleccionar una posici&oacute;n.
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->  
                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Seleccione la imagen</td> 
                                <td align="left">             
                                    <input type="file" id="imagen" name="imagen" required/>
                                    <div id="errorimagen" style="display:none;color:red">
                                        Debes seleccionar una posici&oacute;n.
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila --> 
                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth"></td> 
                                <td align="left"> 
                                    <input type="submit" class='log' value="Subir"/>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->

                        </table>
                    </form>

                    <div class="clear"></div>
                </div>
                <!-- End Container -->
            </div>

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