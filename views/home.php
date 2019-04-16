<?php

$post_controller = new PostController();

$articulos = $post_controller->get();

$template_post = '
<!DOCTYPE html>
	<html>
	<head>
		<title>Nicolas Cavilla</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./public/css/estilos.css">

	</head>
	<body>
		<script type="text/javascript" src="./public/js/main.js"></script>
		<section id="nav-bar">
			<div>
				<h1 style="margin-left: 20px; font-weight: normal;">Nicolas Cavilla</h1>
				<nav>
					<ul>
						<li>Home</li>
						<li>Buscar</li>
						<li>Sobre mí</li>
					</ul>
				</nav>
			</div>
		</section>
		<aside id="redes">
			<ul>
				<li><img src="./public/img/github.svg" alt="github"></li>
				<li><img src="./public/img/twitter.svg" alt="twitter"></li>
				<li><img src="./public/img/email.svg" alt="email"></li>
			</ul>
		</aside>
<section id="banner">
			<div>
				<header>
					<p>Nicolas Cavilla</p>
				</header>
				<p>
					Self-learning software and electrical engineering through research & development. Filming the entire process on YouTube.
				</p>
				<footer>
					
				</footer>
			</div>
		</section>
		<section id="principal">
';

if(empty($articulos)){
	$template_post .="<h1>No hay post!</h1>";
}else{

	$template_post .= '
		<section id="articulos">
	';

	for($n=count($articulos)-1; $n >= 0; $n--){
		$template_post .= '
			<article>
				<div class="num-art">
					<header>
						#'. $n .'
					</header>';
		$fecha = preg_split("/[-\s,]+/", $articulos[$n]['fecha']);

		$template_post .='
					<footer>
						'. $fecha[2] .'/'.$fecha[1].'/'.$fecha[0].'
					</footer>
				</div>
					<div class="div-art">
						<header>
						<a  href="'.$articulos[$n]['url'].'">'. $articulos[$n]['titulo'] .'</a>
						</header>
						<p class="descripcion">
							'. $articulos[$n]['subtitulo'] .'
						</p>
					</div>
				
			</article>
		';	

	}

	$template_post .= '
		</section>
	</section>
	';
	
}
	print($template_post);
