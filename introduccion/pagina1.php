<?php
$v='?v='.date('YmdHis');
?><!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
	  <title>Document</title>
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
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
				<a href="./" class="navbar-brand">CRV SOLUCIONES SOFTWARE</a>
			</div>
			<!-- inicio del menu delapagina -->
			<div class="collapse navbar-collapse" id="navegacion-jg">
			    <ul class="nav navbar-nav">
				    <li><a href="pagina1.html">QUIENES SOMOS</a></li>
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

<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">¿Por qué trabajar con nosotros?</h2>
                    <hr class="light">
                    <p class="text-faded">
						CRV - Soluciones Software es una compañía del sector informático que ofrece servicios de desarrollo de software, desarrollo de aplicaciones móviles y consultoría de TI. El equipo de trabajo de CRV - Soluciones Software coopera para ofrecer soluciones de desarrollo de software a clientes sin importar el tamaño de sus necesidades.
						<br/>
						<br/>
						Desde proyectos o integraciones de bajo costo hasta sistemas misionales complejos, nuestros clientes comprenden desde desarrollos de innovación nacidos en startups hasta corporaciones fuertemente establecidas. Ellos conocen de primera mano que nuestro personal de TI les permite incrementar sus ingresos, construir o mejorar canales de comunicación y simplificar operaciones.
						<br/>
						<br/>
						En CRV - Soluciones Software entendemos que se necesita de un excelente conocimiento de su organización y su negocio para ofrecerle soluciones de TI con los más altos estándares de calidad y evolucionen con las necesidades de su compañía. Ofrecemos soluciones de software a la medida de cualquier escala ya que sabemos utilizar el poder de diferentes tecnologías e integrarlas de manera efectiva.
					</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Detalle de nuestros servicios</a>
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