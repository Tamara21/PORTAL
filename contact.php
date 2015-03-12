<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cont&aacute;ctanos</title>
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

        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                $("#formulario").submit(function() {
                    //validamos que no esten en blanco los campos
                    if ($("#name").val().length === 0)
                    {
                        $("#errorname").css("display", "inline");
                        $("#name").focus();
                        return false;
                    }
                    else {

                        $("#errorname").css("display", "none");
                    }

                    //validamos que no esten en blanco los campos
                    if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1)
                    {
                        $("#erroremail").css("display", "inline");
                        $("#emial").focus();
                        return false;
                    }
                    else {

                        $("#erroremail").css("display", "none");
                    }

                    //validamos que no esten en blanco los campos
                    if ($("#message").val().length === 0)
                    {
                        $("#errormessage").css("display", "inline");
                        $("#message").focus();
                        return false;
                    }
                    else {

                        $("#errormessage").css("display", "none");
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
            <a href="style/images/art/bg2.jpg">1</a> 
            <a href="style/images/art/bg3.jpg">1</a> 
            <a href="style/images/art/bg4.jpg">1</a> 
            <a href="style/images/art/bg5.jpg">1</a> 
            <a href="style/images/art/bg6.jpg">1</a> 
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
                        <li><a href="contact.php" class="active">Contacto</a></li>
                </ul>
                <br style="clear: left" />
            </div>
            <!-- End Menu -->

            <!-- Begin Container -->
            <div id="container" class="opacity">
                <div class="content">
                    <h2>Contacto</h2>
                    <p>Requiere mayor información, tiene dudas, comentarios, contáctenos</p>
                    <br />
                    <p>Comun&iacute;quese con el director de carrera</p>
                    <br />
                    <br />

                    <form action="contact-send.php" method="post" id="formulario">
                        <table width="70">

                            <tr>
                                <th width="30"><label>Nombre:</label></th>
                                <td width="70"> <input type="text" name="name" id="name" class="text required" title="" placeholder="Ejemplo: Gloria Martinez Chapa" size="35" />
                                    <div id="errorname" style="display:none;color:red">
                                        Debes ingresar tu nombre completo por favor
                                    </div></td>
                            </tr>

                            <tr>
                                <th width="30"> <label>Email:</label></th>
                                <td width="70"><input type="text" name="email" id="email" class="required" title=""  placeholder="Tu e-mail. Ejemplo: gloriamartinez@gmail.com" size="35"/>
                                    <div id="erroremail" style="display:none;color:red">
                                        Debes ingresar un email valido
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th height="65" width="30"><label>Mensaje:</label></th>
                                <td height="65" width="70"><textarea name="message" id="message" class="required" cols="31" rows="10"></textarea>
                                    <div id="errormessage" style="display:none;color:red">
                                        Debes ingresar tu mensaje
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th height="65" width="30"><label></label></th>
                                <td width="30"> <input type="submit" value="Enviar" class="log" name="submit" /></td>
                            </tr>

                        </table>
                        <input type="hidden" name="v_error" id="v-error" value="Required" />
                        <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />

                    </form>

                    <div class="response"></div>
                </div>
                <br />

                <div class="sidebar">
                    <div class="sidebar-box">
                        <h4>Dirección:</h4>
                        <p>Av. La Palma No. 125, Col. Vista Hermosa<br>
                                San Juan del Río, Qro. C.P. 76800
                                <br>
                                    <span class="lite1">Tel:</span> (427) 129 20 00<br>
                                        <span class="lite1">Fax:</span> Ext. 255<br>
                                            <span class="lite1">E-mail:</span> fdiazm@utsjr.edu.mx</p>
                                            </div>
                                            <div class="sidebar-box">
                                                <h4>Nuestra ubicación</h4>
                                                <iframe width="265" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/?ie=UTF8&amp;ll=20.367755,-100.010104&amp;spn=0.012963,0.022659&amp;z=16&amp;output=embed"></iframe>
                                            </div>
                                            </div>
                                            <div id="footer">                            
                                            </div>
                                            <!-- End Full Width -->



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