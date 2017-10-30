<?php defined( '_JEXEC' ) or die; 
   $v='?v='.date('YmdHis');
   include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
   
   ?><!doctype html>
<html lang="<?php echo $this->language; ?>">
   <head>
      <jdoc:include type="head" />
      <link rel="stylesheet" href="<?php echo $tpath; ?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo $tpath; ?>/css/estilos.css<?php echo $v; ?>">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="<?php echo $tpath; ?>/js/bootstrap.min.js"></script>﻿
      <script src="<?php echo $tpath; ?>/css/bootstrap.min.js"></script>﻿
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
   </head>
   <body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
      <div class="container-alt">
         <header>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-jg"> 
                     <span class="sr-only">Desplegar / Ocultar Menu</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a href="" class="navbar-brand">CRV SOLUCIONES SOFTWARE</a>
                  </div>
                  <!-- inicio del menu delapagina -->
                  <div class="collapse navbar-collapse" id="navegacion-jg">
                     <jdoc:include type="modules" name="position-navbar" />
                     <form action="" class="navbar-form navbar-right role="search">
                        <div class="input-group">
                           <span class="input-group-addon" >					
                           <span class="glyphicon glyphicon-search"></span>
                           </span>
                           <input type="text" class="form-control" placeholder="buscar">
                        </div>
                     </form>
                  </div>
               </div>
            </nav>
         </header>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="<?php echo $tpath; ?>/img/presentacion1.jpg" alt="">
               </div>
               <div class="item">
                  <img src="<?php echo $tpath; ?>/img/presentacion2.jpg" alt="">
               </div>
               <div class="item">
                  <img src="<?php echo $tpath; ?>/img/presentacion3.jpg" alt="">
               </div>
               <div class="item">
                  <img src="<?php echo $tpath; ?>/img/presentacion5.jpg" alt="">
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="col-md-12">
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="debug" />
         </div>
		<div class="col-md-12" id="footer_div">
                    <footer class="footer">
                        <div class="container">
                            <div class="col-md-3">
								<h3>SOBRE NOSOTROS</h3>
								<p>CRV SOLUCIONES SOFTWARE <br> 
							FUNDACION AÑO 2015 <br>
							CRA 48a NUMERO 2-24 <br>- LOS NARANJOS -<br> Tel:3186234042-Popayán (Colombia)</p>
							</div>
							<div class="col-md-3">
								<h3>ULTIMAS NOTICIAS</h3>
								            <jdoc:include type="modules" name="position-noticias" />
							</div>
					<div class="col-md-3">
						<h3>CONTACTO</h3>
						        Responzable: <a href="https://co.linkedin.com/in/camilo-ernesto-ruiz-vidal-72251b9a" target="_blank">ING. CAMILO ERNESTO RUIZ VIDAL</a><br> 
								Direccion: <a href="https://www.google.com.co/maps/place/Cra.+48,+Popay%C3%A1n,+Cauca/@2.4595132,-76.6386335,17z/data=!3m1!4b1!4m8!1m2!2m1!1scra+48a+numero+2-24!3m4!1s0x8e30034dccf9dad3:0xea81615534e6eed2!8m2!3d2.4595132!4d-76.6364448?dcr=0" target="_blank">CARRERA 48a NUMERO 2-24</a><br>
								Telefono: <a href="tel:3186234042">3186234042</a><br>
								Email: <a href="mailto:inf@solucionescrv.com">inf@solucionescrv.com</a>
								<script>$(function()
								{
									$('#tel2').html('<a class="link" href="tel:Prueba de telefono"><i class="glyphicon glyphicon-phone-alt"></i> Prueba de telefono</a>');
								});
								</script>
					</div>
					<div class="col-md-3">
						<h3>REDES SOCIALES</h3>
						<a href="https://www.facebook.com/solucionescrv/" target="_blank">
							<img src="<?php echo $tpath; ?>/img/facebook.png" alt="facebook" style="width: 40px;">
						</a>
						<a href="https://co.linkedin.com/company/crv-soluciones-software" target="_blank">
							<img src="<?php echo $tpath; ?>/img/descarga.png" alt="linkedin" style="width: 40px;">
						</a>
					<div class="col-md-12">
						<div id="copy-rigth">
							<a href="http://solucionescrv.com" target="_blank">DISEÑO WEB POR <img src="<?php echo $tpath; ?>/img/icons/logo-crv.png" alt="logo crv"> SOLUCIONES SOFTWARE</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>