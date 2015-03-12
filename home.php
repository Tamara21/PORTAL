<?php
include"conectar.php";
conectarBD();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
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
                <div class="logo opacity"><a href="index.html"><img src="style/images/logo.png" alt="" /></a></div>

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
                        <form method='post' action='proflogin.php'>
                            <input type='submit' class='log' value='Log In'/> 	          
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
                    <li><a href="#">Profesores</a>
                        <ul>
                            <li><a href="perfiles.html">Perfil</a></li>
                            <li><a href="horarioprofesores.php">Horarios</a></li>
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

                <!-- Begin Showcase -->
                <div id="showcase" class="showcase"> 
                    <!-- Each child div in #showcase represents a slide -->
                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content"> 
                            <?php        		
                            $consultar=mysql_query("SELECT * FROM avisos where id=1");
                            while($imagenes=mysql_fetch_array($consultar)){     
                            $imagen=$imagenes['nombre'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                            echo "<img src='$imagen' width='900' height='400'/> ";
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Each child div in #showcase represents a slide -->
                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content">
                            <?php        		
                            $consultar=mysql_query("SELECT * FROM avisos where id=2");
                            while($imagenes=mysql_fetch_array($consultar)){     
                            $imagen=$imagenes['nombre'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                            echo "<img src='$imagen' width='900' height='400'/> ";
                            }
                            ?>
                        </div>
                        <div class="showcase-caption">
                            Avisos relevantes
                        </div>
                    </div>

                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content"> 
                            <?php        		
                            $consultar=mysql_query("SELECT * FROM avisos where id=3");
                            while($imagenes=mysql_fetch_array($consultar)){     
                            $imagen=$imagenes['nombre'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                            echo "<img src='$imagen' width='900' height='400'/> ";
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Each child div in #showcase represents a slide -->
                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content"> 
                            <?php        		
                            $consultar=mysql_query("SELECT * FROM avisos where id=4");
                            while($imagenes=mysql_fetch_array($consultar)){     
                            $imagen=$imagenes['nombre'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                            echo "<img src='$imagen' width='900' height='400'/> ";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Each child div in #showcase represents a slide -->
                    <div class="showcase-slide"> 
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content"> 

                            <?php        		
                            $consultar=mysql_query("SELECT * FROM avisos where id=5");
                            while($imagenes=mysql_fetch_array($consultar)){     
                            $imagen=$imagenes['nombre'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD
                            echo "<img src='$imagen' width='900' height='400'/> ";
                            }
                            ?>

                        </div>
                        <div class="showcase-caption">
                            Avisos relevantes
                        </div>
                    </div>
                </div>
                <!-- End Showcase -->

                <div class="intro">Área de Avisos</div>
                <div class="hr2"></div>
                <!-- Divider -->                      
                <!-- Begin Top Columns -->
                <h2>Lo que hacemos</h2>
                <div class="two-third">
                    <p>Los estudiantes de Tecnolog&iacute;as de la Informaci&oacute;n y Comunicaci&oacute;n  no s&oacute;lo estudian, sino tambi&eacute;n aprenden y se desarrollan profesionalmente, esto se logra mediante un programa educativo competente y as&iacute; mismo se lora gracias a los profesores con grandes capacidades y alto conocimiento. Esto y m&aacute;s haces en la <a href="http://www.utsjr.edu.mx">Universidad Tecnol&oacute;gica de San Juan del R&iacute;o</a> en la carrera de Tecnolog&iacute;as de la Informaci&oacute;n y Comunicaci&oacute;n &Aacute;rea Sistemas Inform&aacute;ticos</p>
                </div>
                <div class="one-third last">
                    <ul>
                        <li>Trabajo en equipo</li>
                        <li>Competencias</li>
                        <li>Amistad</li>
                        <li>Respeto</li>
                    </ul>
                </div>
                <!-- End Top Columns -->

                <div class="clear"></div>
                <br />
                <br />
                <br />

                <!-- Begin 4 Columns -->

                <div class="one-fourth"> <img src="style/images/icon1.png" alt="" class="center" /><br />
                    <h4 class="center">Microsoft</h4>
                    <p class="center">Certif&iacute;cate en Microsoft Office, haz tu examen de cualquier software de Office.</p>
                </div>
                <div class="one-fourth"> <img src="style/images/icon2.png" alt="" class="center" /><br />
                    <h4 class="center">CISCO</h4>
                    <p class="center">Obt&eacute;n tu certificaci&oacute;n e Redes CISCO.</p>
                </div>
                <div class="one-fourth"> <img src="style/images/icon3.png" alt="" class="center" /><br />
                    <h4 class="center">icarnegie</h4>
                    <p class="center">Obt&eacute;n tu certificaci&oacute;n en icarnegie como parte del programa escolar.</p>
                </div>
                <div class="one-fourth last"> <img src="style/images/icon4.png" alt="" class="center" /><br />
                    <h4 class="center">Programaci&oacute;n</h4>
                    <p class="center">Aprende a programar en Java, HTML/HTML5 & CSS/CSS3, Android y muchos m&aacute;s</p>
                </div>
                <div class="clear"></div>
                <div class="hr1"></div>
                <!-- Divider --> 

                <!-- Begin Latest Works -->
                <h2>Tecnolog&iacute;a  </h2>
                <div class="carousel">
                    <div id="carousel-scroll"><a href="#" id="prev">Anterior</a><a href="#" id="next">Siguiente</a></div>
                    <ul>
                        <li>  <img src="style/images/art/py1.PNG" alt="" />  </li>
                        <li>  <img src="style/images/art/py2.png" alt="" /> </li>
                        <li>  <img src="style/images/art/py3.png" alt="" /> </li>
                        <li>  <img src="style/images/art/py4.png" alt="" /> </li>
                        <li>  <img src="style/images/art/py5.png" alt="" /> </li>
                        <li>  <img src="style/images/art/py6.png" alt="" /> </li>
                        <li>  <img src="style/images/art/py7.png" alt="" /> </li>

                    </ul>
                </div>
                <!-- End Latest Works -->


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

