<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Insertar Aviso</title>
        <link rel="shortcut icon" type="image/x-icon" href="style/images/fav.png" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/color/red.css" media="all" />
        <link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css"  />
        <link rel="stylesheet" type="text/css" href="style/type/museo.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/ptsans.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/charis.css" media="all" />



        <script type="text/javascript" src="style/js/jquery.js"></script>
        <script src="style/js/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                $("#formulario").submit(function() {
                    //validamos que no esten en blanco los campos

                    if ($("#slider option:selected").val() === "0") {
                        $("#errorslider").css("display", "inline");
                        $("#slider").focus();

                        return false;
                    }
                    else {
                        $("#errorslider").css("display", "none");

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
    </head>
    <body>
        <!-- Fullscreen backgrounds -->
        <div id="thumbs">
            <a href="style/images/art/bg1.jpg"></a>
            <a href="style/images/art/bg2.jpg"></a>
            <a href="style/images/art/bg3.jpg"></a>
            <a href="style/images/art/bg4.jpg"></a>
            <a href="style/images/art/bg5.jpg"></a>
            <a href="style/images/art/bg6.jpg"></a>
        </div>
        <div id="superbgimage">
            <div class="scanlines"></div>
        </div>
        <!-- End Fullscreen backgrounds -->
        <!-- Begin Wrapper -->
        <div id="wrapper">
            <div id="header">
                <div class="logo"><a href="index.php"><img src="style/images/logo.png" alt="" /></a></div>
                <div class="social">
                    <ul>

                        <li><a href="https://www.facebook.com/profile.php?id=100009031561890&fref=ts"><img src="style/images/icon-facebook.png" alt="Facebook" /></a></li>
                        <li><a href="https://twitter.com/TICS_UTSJR"><img src="style/images/icon-twitter.png" alt="Twitter" /></a></li>       

                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Begin Menu -->
            <div id="menu" class="menu opacity">
                <ul>
                    <li><a href="#" class="active">Avisos</a>
                        <ul>
                            <li><a href="ingresaraviso.php" class="active">Ingresar aviso</a></li>	      	  
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
                    <li><a href="#">Profesor</a>
                        <ul>
                            <li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
                            <li><a href="listadohorarioprofes.php">Modificar horario</a></li>           
                        </ul>
                    </li>
                    <li><a href="#">Usuarios</a>
                        <ul>
                            <li><a href="#">Ingresar usuario</a></li>
                            <li><a href="#">Modificar usuario</a></li>
                            <li><a href="#">Eliminar usuario</a></li>                
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

                    <h1>Ingresar nuevo aviso</h1>

                    <h2>Recomendaci&oacute;n: </h2>

                    <h3>Para una visualiaci&oacute;n completa, seleccione una imagen con propiedades: </h3>
                    <p>Anchura: 900 pixeles</p>
                    <p>Altura: 400 pixeles</p>    
                    <form method="post" id="formulario" action="pruebareemplazo.php" enctype="multipart/form-data">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2" align="left">
                            <h1>Proporciona lo siguientes datos</h1>
                            </th>
                            </tr>  
                            </thead>
                            <!-- Fin del Encabezado de la tabla -->
                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Selecciona la posici&oacute;n en la que deseas publicar tu aviso:</td> 
                                <td align="left">
                                    <select name="slider" id="slider" required>
                                        <option value=0>---</option>
                                        <option value=1>Posici&oacute;n 1</option>
                                        <option value=2>Posici&oacute;n 2</option>
                                        <option value=3>Posici&oacute;n 3</option>
                                        <option value=4>Posici&oacute;n 4</option>
                                        <option value=5>Posici&oacute;n 5</option>             
                                    </select>
                                    <div id="errorslider" style="display:none;color:red">
                                        Debes seleccionar una posici&oacute;n.
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->
                            <br />
                            <br />
                            <br />
                            <!-- Inicio de fila -->
                            <tr>
                                <td align="rigth">Selecciona tu aviso:</td> 
                                <td align="left">		
                                    <input type='file' id='imagen' name='imagen' />
                                    <div id="errorimagen" style="display:none;color:red">
                                        Debes seleccionar una imagen.
                                    </div>
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->
                            <br />
                            <br />
                            <!-- Inicio de fila -->
                            <tr>
                                <td colspan="2" align="Center">
                                    <input type='submit' class='log' value='Subir'  />
                                </td>      
                            </tr>
                            <!-- Fin de la fila -->

                        </table>

                    </form>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />  
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