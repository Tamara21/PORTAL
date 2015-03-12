<?php
include("seguridad.php");
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
        <script type="text/javascript" src="style/js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="style/js/carousel.js"></script>
        <script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
        <script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.forms').dcSlickForms();
            });
        </script>
        <script type="text/javascript">

            $(document).ready(function()
            {
                $("#showcase").awShowcase(
                        {
                            content_width: 900,
                            content_height: 400,
                            auto: true,
                            interval: 3000,
                            continuous: false,
                            arrows: true,
                            buttons: true,
                            btn_numbers: true,
                            keybord_keys: true,
                            mousetrace: false, /* Trace x and y coordinates for the mouse */
                            pauseonover: true,
                            stoponclick: false,
                            transition: 'fade', /* hslide/vslide/fade */
                            transition_delay: 0,
                            transition_speed: 500,
                            show_caption: 'onload' /* onload/onhover/show */
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
                    <li><a href="#" class="active">Profesor</a>
                        <ul>
                            <li><a href="perfiles.php" >Perfiles</a></li>
                            <li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
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

                <!-- Begin Showcase -->
                <div id="showcase" class="showcase"> 
                    <!-- Each child div in #showcase represents a slide -->
                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content"> <img src="style/images/profes/PROFES2.png" alt="1" /> </div>
                    </div>


                </div>

                <!-- End Showcase -->

                <div class="intro"></div>
                <div class="hr2"></div>
                <!-- Divider --> 

                <!-- Begin Top Columns -->
                <h2>MENSAJE DEL DIRECTOR</h2>
                <div class="two-third">        
                    <p><span class="dropcap"></span> <img src="style/images/profes/PaginaConstruccion1.png" alt="" /></p>
                </div>  
                <div class="one-third last">
                    <!--<img src="style/images/profes/Sitio-web-en-construccion.png" alt="" /> -->
                </div>
                <!-- End Top Columns -->

                <div class="clear"></div>
                <br />
                <br />
                <br />
                <div class="hr1"></div>
                <!-- Begin Top Columns -->
                <h2>PERFIL DEL PROFESOR</h2>
                <div class="two-third">
                    <p><span class="dropcap"></span><img src="style/images/profes/PaginaConstruccion1.png" alt="" /></p>
                </div>    
                <div class="one-third last">      
                    <!--<img src="style/images/profes/Sitio-web-en-construccion.png" alt="" /> -->
                </div>
                <!-- End Top Columns -->
                <!-- Divider --> 

                <!-- Begin Latest Works -->

                <div class="response"></div>
                <!-- End Form -->
                <div class="clear"></div>
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
