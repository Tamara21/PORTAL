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
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script> 
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/transify.js"></script>
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	
      var 
        speed = 1000,   // animation speed
        $wall = $('#portfolio .items'),

        masonryOptions = {         // initial masonry options

          itemSelector: '.box:not(.invis)',
          animate: true,
          animationOptions: {
            duration: speed,
            queue: false
          }
        };
		
		$wall.imagesLoaded(function(){
			
			$wall.masonry(masonryOptions);
			
			// Create array of filters from link href
			var arrFilter = [];
			$('#filtering-nav a').each(function(){
				fhash = $(this).attr('href').replace('#','');
				if(fhash != 'all'){
					arrFilter.push(fhash);
				}
			});
			
			//  Get the parameter value after the # symbol
			var url=document.URL.split('#')[1];
			if(url == undefined){
				url = 'all';
			}
			$('#filtering-nav a.'+url).parent().addClass('active');
			
			if(jQuery.inArray(url, arrFilter) > '-1'){
				// set masonry options animate to false
				masonryOptions.animate = false;
				// hide boxes that don't match the filter class
				$wall.children().not('.'+url).toggleClass('invis').hide();
			}
		//	imageSetCss($(".box"));
			// run masonry again
			$wall.masonry(masonryOptions);
		//	imageFadeIn($(".box"));
		$wall.animate({opacity: 1},1000);
			
		});
		
		$('#filtering-nav a').click(function(e){
			var color = $(this).attr('class');
			filterClass = '.' + color;
			$('#filtering-nav li').removeClass('active');
			$(this).parent().addClass('active');
			
			if(filterClass=='.all') {
			  // show all hidden boxes
			  $wall.children('.invis').toggleClass('invis').fadeIn(speed);
			} else {
			  // hide visible boxes 
			  $wall.children().not(filterClass).not('.invis').toggleClass('invis').fadeOut(speed);
			  // show hidden boxes
			  $wall.children(filterClass+'.invis').toggleClass('invis').fadeIn(speed);
			}
			$wall.masonry({animate: true});
			// set hash in URL
			location.hash = color;
			e.preventDefault();
		});
});
$.fn.imagesLoaded = function(a) {
	var 
	b=this.find("img"),
	c=[],
	d=this,
	e=b.length;
	
	if(!b.length){
		a.call(this);
		return this
	}
	b.one("load error",function(){
		--e===0&&(e=b.length,b.one("load error",function(){
			--e===0&&a.call(d)}).each(function(){
				this.src=c.shift()
			})
		)}
	).each(function(){
		c.push(this.src),this.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
	});
	return this
};
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
       <li><a href="#" >Avisos</a>
      <ul>
          <li><a href="ingresaraviso.php" class="active">Ingresar aviso</a></li>
	</li>
      	  
    </ul> 
    
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
      <li><a href="#" class="active">Profesores</a>
        <ul>
        <li><a href="perfiles.html" class="active">Perfiles</a></li>
      	<li><a href="inserthorarioprofe.php">Ingresar horario</a></li>
             <li><a href="listadohorarioprofes.php">Modificar horario</a></li>           
        </ul>
      </li>
        <li><a href="#">Usuarios</a>
        <ul>
        <li><a href="insertar.php">Nuevo Usuario</a></li>
        <li><a href="listado.php">Lista de Usuarios</a></li>
        <li><a href="buscar.php">Buscar Usuario</a></li>               
        </ul>
        </li>
      <li><a href="salir.php">Cerrar sesi&oacute;n</a></li>     
    </ul>
    <br style="clear: left" />
  </div>
                  
            <!-- End Menu --> 
  
  <!-- Begin Container -->
  <div id="container" class="opacity">
    <h2>Nuestro Personal</h2>
    <p></p>
    
     <!-- Begin Portfolio -->
      <div id="portfolio">
        <ul id="filtering-nav">
          <li>Filtros:</li>
          <li><a class="all" href="#all">Nuestro personal</a></li>
          <li><a class="cat1" href="#cat1">Directivos</a></li>
          <li><a class="cat2" href="#cat2">Profesores Tiempo Completo</a></li>
          <li><a class="cat3" href="#cat3">Profesores de Asignatura</a></li>
        </ul>
        <div class="clear"></div>
        <div class="items">
          <div class="box col5 cat1"><a href="fideA.php"><span class="overlay details"></span><img src="style/images/profes/fide.png" alt="" /></a></div>
          <div class="box col5 cat1"><a href="beniA.php"><span class="overlay details"></span><img src="style/images/profes/beni.png" alt="" /></a></div>
          <div class="box col5 cat2"><a href="aliciaA.php"><span class="overlay details"></span><img src="style/images/profes/alice.png" alt="" /></a></div>
          <div class="box col5 cat2"><a href="alexA.php"><span class="overlay details"></span><img src="style/images/profes/alex1.png" alt="" /></a></div>
          <div class="box col5 cat2"><a href="reneA.php"><span class="overlay details"></span><img src="style/images/profes/rene.png" alt="" /></a></div>
          <div class="box col5 cat2"><a href="goyoA.php"><span class="overlay details"></span><img src="style/images/profes/goyo.png" alt="" /></a></div>
         <div class="box col5 cat3"><a href="doraA.php"><span class="overlay details"></span><img src="style/images/profes/dora.png" alt="" /></a></div>
         <div class="box col5 cat2"><a href="brendaA.php"><span class="overlay details"></span><img src="style/images/profes/brenda.png" alt="" /></a></div>
          <div class="box col5 cat3"><a href="hectorA.php"><span class="overlay details"></span><img src="style/images/profes/hector.png" alt="" /></a></div>
          <div class="box col5 cat3"><a href="miguelA.php"><span class="overlay details"></span><img src="style/images/profes/miguel.png" alt="" /></a></div>
          <div class="box col5 cat3"><a href="memoA.php"><span class="overlay details"></span><img src="style/images/profes/memo.png" alt="" /></a></div>
          <div class="box col5 cat3"><a href="marisolA.php"><span class="overlay details"></span><img src="style/images/profes/marisol.png" alt="" /></a></div> 
          <div class="box col5 cat2"><a href="rafaA.php"><span class="overlay details"></span><img src="style/images/profes/rafa.png" alt="" /></a></div>	         
         <div class="box col5 cat2"><a href="normaA.php"><span class="overlay details"></span><img src="style/images/profes/norma.png" alt="" /></a></div>		  
        </div>
        <!-- .wrap --> 
    </div>
    <!-- End Portfolio -->
    
    <div class="clear"></div>
    <div id="footer">
   
      <div class="footer-top"></div>
      <!-- Divider -->
     
      <a href="proflogin.php">¿Quieres iniciar sesi&oacute;n?</a>   
        <!-- End Form --> 
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
