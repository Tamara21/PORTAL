<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alicia</title>
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
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.forms').dcSlickForms();
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#formulario").submit(function() {
                    //validamos que no esten en blanco los campos



                    if ($("#rene").val() === "0") {
                        $("#erroracerca").css("display", "inline");
                        $("#rene").focus();

                        return false;
                    }
                    else {
                        $("#erroracerca").css("display", "none");

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
                    <li><a href="#" class="active">Profesor</a>
                        <ul>
                            <li><a href="perfiles.php" class="active">Perfiles</a></li>
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
                <div class="full-width">
                    <div class="one-third"><img src="style/images/profes/alicia 288.png" alt="" /></div>
                    <div class="two-third last">
                        <h1>ALICIA CORT&Eacute;S GRAC&Iacute;A</h1>

                        <h2>Grado Profesional</h2>
                        <p>Maestra en Gesti&oacute;n en Tecnolog&iacute;as de la Informaci&oacute;n. (MGTI)</p>
                        <br/>   
                        <h2>Fecha de Nacimiento</h2>
                        <p>24 Agosto del 1974</p>
                        <br/>
                        <h2>Cargo</h2>
                        <p>Profesor de Tiempo Completo Asociado “C”</p>
                        <br/>
                        <!-- Begin Toggle -->
                        <h2>Materias impartidas</h2>
                        <div class="toggle">
                            <h2 class="trigger">Materias a lo largo de su desempe&ntilde;o docente</h2>
                            <div class="togglebox">
                                <div>
                                    <h4>Materias</h4>
                                    <p><ol>
                                        <li>Administraci&oacute;n de la Funci&oacute;n Inform&aacute;tica</li> 
                                        <li>Calidad en el Desarrollo de Software</li>
                                        <li>Direcci&oacute;n de Equipos de Alto Rendimiento</li>                                         
                                        <li>Estad&iacute;stica Aplicada</li> 
                                        <li>Formaci&oacute;n Sociocultural I</li> 
                                        <li>Ingenier&iacute;a de Software I</li>
                                        <li>Integradora II</li>
                                        <li>Itroducci&oacute;n al An&aacute;lisis y Dise&ntilde;o de Sistemas</li>
                                        <li>Metodolog&iacute;a de la programaci&oacute;n</li>
                                        <li>Modelado de Procesos de Negocios</li>
                                        <li>Negociaci&oacute;n Empresarial</li>
                                        <li>Ofim&aacute;tica</li>
                                        <li>Sistemas Operativos</li>
                                    </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Toggle --> 

                        <!-- Begin Toggle -->
                        <h2>Formaci&oacute;n Profesional</h2>
                        <div class="toggle">
                            <h2 class="trigger">Licenciatura</h2>
                            <div class="togglebox">
                                <div>
                                    <h4>Instituto Tecnol&oacute;gico de San Juan del R&iacute;o.</h4>
                                    <p><img src="style/images/profes/ITSJR.png" class="left" alt="" /></p>
                                </div>
                            </div>
                        </div>
                        <div class="toggle">
                            <h2 class="trigger">Maestr&iacute;a</h2>
                            <div class="togglebox">
                                <div>
                                    <h4>Universidad del Valle de M&eacute;xico</h4>
                                    <p><img src="style/images/profes/UVMQ.png" class="left" alt="" /></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Toggle -->

                        <!-- Begin Toggle -->
                        <h2>Informaci&oacute;n complementaria</h2>
                        <div class="toggle">
                            <h2 class="trigger">Cursos</h2>
                            <div class="togglebox">
                                <div>
                                    <ul>
                                        <li>Curso de C&oacute;mputo Forense.</li>
                                        <li>Certificaciones de Microsoft, CMMI (curso de administraci&oacute;n de proyectos de software nivel II.</li>
                                        <li>Diplomado en herramientas metodol&oacute;gicas para la formaci&oacute;n basada en competencias profesionales.</li>
                                        <li>Icarniegie.</li>
                                        <li>Congreso de COIN</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Toggle --> 
                    </div>
                    <h2>Acerca de m&iacute;</h2>
                    <?php        		
                    $consultar=mysql_query("SELECT * FROM acerca where idusuario='acortesg'");
                    while($profe=mysql_fetch_array($consultar)){     
                    $idusuario=$profe['idusuario'];//se le pone 'nombre' porque lleva el nombre/url del campo de la BD	
                    $acerca=$profe['acercami'];	     			

                    echo"    					
                    <form action='aliciam.php' method='POST' id='formulario' >
                    <table>
                    <thead>
                    <tr>
                    <th colspan='2' align='left'>
                    <h4>Informaci&oacute;n</h4>
                    </th>
                    </tr>  
                    </thead>

                    <tr>
                    <td align='rigth'>ID Usuario:</td> 
                    <td align='left'>
                    <input type='text' name='idusuario' id='idusuario' value='$idusuario' readonly/>
                    </td>      
                    </tr>

                    <tr>
                    <td align='rigth'>Acerca de mi:</td> 
                    <td align='left'>            			           
                    <textarea name='alicia' id='alicia' rows='10' cols='50' required> $acerca </textarea>

                    <div id='erroracerca' style='display:none;color:red'>
                    Debes seleccionar una posici&oacute;n.
                    </div>
                    </td>      
                    </tr>

                    <tr>
                    <td align='rigth'></td> 
                    <td align='left'>
                    <button type='submit' name='Enviar' class='log' id='Enviar'>Enviar</button>               
                    </td>      
                    </tr>
                    </table>
                    </form>
                    ";

                    }
                    ?>
                    <!-- End Full Width -->
                </div>

                <div class="clear"></div>
                <div id="footer">
                    <div class="footer-top"></div>
                    <!-- Divider -->
                    <div class="one-fourth">
                        <h3>Redes Sociales</h3>
                        <ul class="latest-posts">                            
                            <li><span class="date"><img src="style/images/icon-googleplus.png" alt="Googleplus" /></span>aliciacortesgarcia@gmail.com
                            <li><span class="date"><img src="style/images/icon-facebook.png" alt="Facebook" /></span><a href="https://www.facebook.com/alicia.cortes.144 ">Alicia Cortes Garc&iacute;a</a></li>
                            <li><span class="date"><img src="style/images/icon-ut.png" alt="Twitter" /></span>acortesg@utsjr.edu.mx  </li>                            
                        </ul>
                    </div>

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