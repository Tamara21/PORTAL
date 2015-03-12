



<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Noticias</title>
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
                <div class="logo"><a href="index.html"><img src="style/images/logo.png" alt="" /></a></div>
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
                    <li><a href="#">Avisos</a>
                        <ul>
                            <li><a href="ingresaraviso.php">Ingresar aviso</a></li>
                    </li>

                </ul> 

                <li><a href="#" class="active">Noticias</a>
                    <ul>
                        <li><a href="ingresarnoticia.php">Ingresar noticia</a></li>
                        <li><a href="listadoN.php" class="active">Modificar noticia</a></li>
                    </ul>
                </li>
                <li><a href="#">Alumno</a>
                    <ul>
                        <li><a href="inserthorarioalumno.php">Ingresar horario</a></li>
                        <li><a href="listadohorarioalumno.php">Modificar horario</a></li>
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
                    <div class="one-third"></div>
                    <div class="two-third last">


                        <?php

                        $rs=mysql_query("select * from noticias") or die ("Error: ".mysql_error())


                        ?>


                        <H5 align ="center">BIENVENIDO LISTADO DE LAS NOTICIAS </H5>
                        <h5 align ="center" > Para poder modificar da clic en el ID de la noticia 
                        </h5>
                        <br/>


                        <table width="900" border="0">


                            <tr>
                                <td width="200">ID_Noticia:</td>
                                <td width="1000">Fecha:</td>
                                <td width="700">Titulo:</td>
                                <td width="700">Descripcion:</td>
                                <td width="800">Ruta:</td>
                            </tr>

                            <?php
                            while($row=mysql_fetch_array($rs)){
                            $id=$row["id"];
                            $pagina="modificarN.php?id=$id";
                            echo"<tr>";
                            echo"<td><a href=$pagina>".$row["id"]."</a></td>";		
                            echo"<td>".$row["fecha"]."</td>";
                            echo"<td>".$row["titulo"]."</td>";
                            echo"<td>".$row["des"]."</td>";
                            echo"<td>".$row["ruta"]."</td>";
                            echo"</tr>";
                            }
                            mysql_free_result($rs);
                            ?>
                        </table>
                        <p><a href="ingresarnoticia.php">Back</a> </p>







                    </div>
                    <div class="clear"></div>
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
