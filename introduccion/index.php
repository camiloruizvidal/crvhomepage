<?php
$v='?v='.date('YmdHis');
?><!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
	  <title>Document</title>
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/estilos.css<?php echo $v;?>">
		
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
				    <div class="form group">
					    <input type="text" class="form-control" placeholder="buscar">
					</div>
					<button type="submit" class="btn btn-primary">
					    <span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
			</div>
		</div>
		
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
      <img src="img/presentacion1.jpg" alt="">
    </div>

    <div class="item">
      <img src="img/presentacion2.jpg" alt="">
    </div>
	
	<div class="item">
      <img src="img/presentacion3.jpg" alt="">
    </div>

   	<div class="item">
      <img src="img/presentacion5.jpg" alt="">
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
<div id"contenido" class="container-fluid">
	<div class="col-md-12">
		<div class="text-center">
			<a href="pagina2.html" class="btn btn-primary"> ir al sitio </a>
		</div>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>﻿
	<!--<script src="js/bootstrap.min.js<?php echo $v;?>"></script>﻿-->
	</body>
</html>