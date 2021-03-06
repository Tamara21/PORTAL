<?php
include "conectar.php";
conectarBD();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Horario del Profesor</title>
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
                        <form method="post" action="proflogin.php">
                            <input type="submit" class="log" value="Log In"/> 	          
                        </form>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>

            <!-- Begin Menu -->
            <div id="menu" class="menu opacity">
                <ul>
                    <li><a href="#">Nosotros</a>
                        <ul>
                            <li><a href="mision.html">Misi&oacute;n</a></li>
                            <li><a href="vision.html">Visi&oacute;n</a></li>
                            <li><a href="objetivos.html">Objetivos</a></li>
                            <li><a href="#">Plan de estudios</a>
                                <ul>
                                    <li><a href="tsu.html">T&eacute;cnico Superior Universitario</a></li>
                                    <li><a href="ingenieria.html">Ingenier&iacute;a</a></li>
                                </ul>
                            </li>
                            <li><a href="biblioteca.html">Biblioteca virtual</a></li>

                        </ul> 
                        <li><a href="noticias.php">Noticias</a></li>
                        <li><a href="#" class="active">Profesores</a>
                            <ul>
                                <li><a href="perfiles.html">Perfil</a></li>
                                <li><a href="horarioprofesores.php" class="active">Horarios</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Alumnos</a>
                            <ul>
                                <li><a href="infoacademi.html">Informaci&oacute;n Acad&eacute;mica</a></li>
                                <li><a href="reglamento.html">Reglamento</a></li>
                                <li><a href="horarioalumnos.php">Horarios</a></li>
                                <li><a href="estadias.html">Estad&iacute;as</a></li>
                            </ul>
                        </li>
                        <li><a href="padre.html">Padres de Familia</a></li>
                        <li><a href="portafolio.html">Galería</a></li>
                        <li><a href="contact.php">Contacto</a></li>
                </ul>
                <br style="clear: left" />
            </div>
            <!-- End Menu --> 

            <!-- Begin Container -->
            <div id="container" class="opacity"> 
                <?php        		
                $consultar=mysql_query("SELECT * FROM horarioprofesores");

                while($horariosprofesor=mysql_fetch_array($consultar)){     
                $nombreprof=$horariosprofesor['nombreprof'];
                $imagen=$horariosprofesor['ruta'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                echo "
                <br />
                <br />
                <br />	
                <!-- Begin Title -->
                <div class='post-title'>
                <h1>$nombreprof</h1>

                <!-- End Title -->
                </div>

                <div class='full-width'> <img src='$imagen' alt='' width='100%'/> <br />

                <br />           

                <div class='hr2'></div>      
                </div>
                <div class='clear'></div>
                <!-- End info -->  ";
                }
                ?>              



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