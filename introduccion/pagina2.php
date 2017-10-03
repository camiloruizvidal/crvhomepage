<?php
$v='?v='.date('YmdHis');
?><!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
	  <title>Document</title>
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/estilos.css<?php echo $v; ?>">
		
	</head>
<body> 
<header>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		  <div class="container">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-jg"> 
				  <span class="sr-only">Desplegar / Ocultar Menu</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">CRV SOLUCIONES SOFTWARE</a>
			</div>
			<!-- inicio del menu delapagina -->
			<div class="collapse navbar-collapse" id="navegacion-jg">
			    <ul class="nav navbar-nav">
				    <li><a href="pagina1.php">QUIENES SOMOS</a></li>
					<li class="dropdown">
					    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
						   SERVICIOS <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
						    <li><a href="">DISEÑO PAGINAS WEB</a></li>
							<li><a href="">MARKETING DIGITAL</a></li>
							<li><a href="">DESARROLO MOBIL</a></li>
												
						</ul>
					</li>
					<li><a href="">PORTAFOLIO</a></li>
					<li><a href="">CONTACTENOS</a></li>
				</ul>
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
		
</header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestros servicios</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-joomla text-primary sr-icons"></i>
                        <h3>Diseño de paginas web</h3>
                        <p class="text-muted">Creamos paginas web para que su empresa se de a conocer al mundo. Ademas nuestras plataformas se ven en cualquier dispositivo, asi todos conocerán de sus servicios.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-usd text-primary sr-icons"></i>
                        <h3>Marketing Digital</h3>
                        <p class="text-muted">Impulsamos su marca, su empresa y sus prodcutos. Venda mas y de a conocer su empresa de la forma mas efectiva del mercado.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mobile text-primary sr-icons"></i>
                        <h3>Desarrollo mobil</h3>
                        <p class="text-muted">Creamos su plataforma para todos los dispositivos mobiles, Iphone, Android y Windows Phone.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop text-primary sr-icons"></i>
                        <h3>Consultoria TI</h3>
                        <p class="text-muted">El control de procesos, la automatización de tareas o la gestión colaborativa son algunos de los aspectos infinitamente mejorables de muchas organizaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>﻿
	</body>
</html>