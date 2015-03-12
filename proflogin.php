<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Log In</title>
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
                    if ($("#usuario").val().length == 0) {
                        $("#errorUsuario").css("display", "inline");
                        $("#usuario").focus();
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
                    <li><a href="index.html">Home</a></li>                    
                </ul>
                <br style="clear: left" />
            </div>
            <!-- End Menu --> 


            <!-- Begin Container -->
            <div id="container" class="opacity">
                <div class="full-width">
                    <div class="one-third"><img src="style/images/profes/login.png" alt="" /></div>
                    <div class="two-third last">
                        <h2>Login</h2>                       
                        <h5>Introduce tu usuario y contrase&ntilde;a</h5>
                        <div class="form-container">
                            <form  action="acceso.php" method="post" id="formulario" >

                                <?php
                                //verificar si el usuario fue rechazado
                                error_reporting(0);
                                if($_REQUEST["errorusuario"]=="si"){
                                ?>
                                <div align="center" style="color:#F30">
                                    <strong>Datos incorrectos</strong>
                                </div>
                                <?php    
                                }
                                ?>
                                <table align="center" width="225px" cellspacing="2" cellpadding="2" border="0px" bordercolor="0">
                                    <tr>
                                        <td align="right">Usuario:</td>
                                        <td align="left"><input type="text" name="usuario" id="usuario" />
                                            <div id="errorUsuario" style="display:none;color:red;" >
                                                Debes escribir un id para accesar.
                                            </div>                                                                                        
                                            <br/>
                                            <br/>
                                            <!-- Password -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Password:</td>
                                        <td align="left"><input type="password" name="password" id="password"  />
                                            <div id="errorPassword" style="display:none;color:red;" >
                                                Debes escribir tu contraseña.
                                            </div>

                                            <br/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><button type="submit" name="enviar" class="log">Entrar</button></td>

                                    <input type="hidden" name="v_error" id="v-error" value="Required" />
                                    <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />

                                    </tr>
                                </table>  
                            </form>
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
