<?php
include"conectar.php";
conectarBD();
include"seguridad.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Modificar Noticia</title>
        <link rel="shortcut icon" type="image/x-icon" href="style/images/fav.png" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/color/red.css" media="all" />
        <link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css"  />
        <link rel="stylesheet" type="text/css" href="style/type/museo.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/ptsans.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style/type/charis.css" media="all" />






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

                <li><a href="#" class="active">Noticias</a>
                    <ul>
                        <li><a href="ingresarnoticia.php">Ingresar noticia</a></li>
                        <li><a href="listadoN.php" class="active">Modificar noticia</a></li>
                    </ul>
                </li>
                <li><a href="#">Alumno</a>
                    <ul>
                        <li><a href="inserthorarioalumno.php">Ingresar horario</a></li>

                        <li><a href="modificarhorario.php">Modificar horario</a></li>
                    </ul>
                </li>
                <li><a href="#">Profesores</a>
                    <ul>
                        <li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
                        <li><a href="modificarhorarioprofe.php">Modificar horario</a></li>           
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






                        <h1>Modificar Noticias</h1>
                        <?php
                        //recibimos el valor del formulario





                        $id=$_REQUEST['id'];




                        $rs=mysql_query("select * from noticias where id=$id")
                        or die("ERROR: ".mysql_error());

                        $encontrado="false";

                        while($row=mysql_fetch_array($rs)){
                        ?>




                        <table width="900" border="0">



                            <form action="modificar2N.php" method="post" id="formulario" name="formulario">


                                <tr>    
                                    <td>ID:&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" size="31" name="id" id="id" value="<?php echo $row["id"]?>" readonly /></td></tr>  


                                <tr>  
                                    <td >Fecha:&nbsp &nbsp <input type="text"  id="fecha" name="fecha" size="31" value="<?php echo $row["fecha"]?>"/> </td></tr>  

                                <tr>  
                                    <td> Titulo: &nbsp &nbsp <input type="text" name="titulo" size="31" id="titulo" value="<?php echo $row["titulo"]?>"/></td>
                                </tr>  

                                <tr>  
                                    <td> Descripci&oacute;n:&nbsp <textarea name="des" size="35" id="des"> <?php echo $row["des"]?> </textarea> </td>
                                </tr>  

                                <tr>           
                                    <td> Ruta:&nbsp &nbsp &nbsp  <input type="text" size="31" name="ruta" id="ruta" value="<?php echo $row["ruta"]?>" /></td> 
                                </tr>  
                        </table>



                        <input type="submit" name="guardar" class='log' id="guardar" value="Guardar"/>

                        <input type="submit" name="cancelar" class='log' id="cancelar" value="Cancelar"/>


                        </form>





                        <?php
                        $encontrado="true";
                        }
                        mysql_free_result($rs);
                        if($encontrado=="false")
                        {
                        echo("No se encontro el resgitro");
                        $pagina="buscarN.php";
                        echo ("<br /> <br /><a href=$pagina>Buscar otro</a>");
                        }
                        ?>

                        <br />
                        <br />

                        <br />
                        <br />
                        <p><a href="listadoN.php">Back</a></p>

                    </div>
                    <div class="clear"></div>
                </div>
                <!-- End Full Width -->
            </div>


            <div id="copyright" class="opacity">
                <p>Av. La Palma No. 125, Col. Vista Hermosa</p>
                <p>San Juan del Río, Qro. C.P. 76800</p> 
                <br />
                <p>© 2015 Portal de TIC's || Todos los derechos reservados.</p>
            </div>
            <!-- End Wrapper --> 

            <script type="text/javascript" src="style/js/scripts.js"></script>
    </body>
</html>