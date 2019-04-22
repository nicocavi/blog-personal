<?php
	$postController = new PostController();
	$posts = $postController->getTitulo();
	$opciones = '';

	for ($i=0; $i < count($posts) ; $i++) { 
		$opciones = $opciones.'<option value="'.$posts[$i]['titulo'].'">';
	}

	printf('<!DOCTYPE html>
		<html>
		<head>
			<title>Administration</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="./public/css/estilos.css">

		</head>
		<body>
			<section id="nav-bar2">
				<div>
					<a href="/blog-personal"><h1 style="margin-left: 20px; font-weight: normal;">Nicolas Cavilla</h1></a>
					<nav>
						<ul>
							<li><a href="/blog-personal">Home</a></li>
							<li>Buscar</li>
							<li>Sobre mí</li>
						</ul>
					</nav>
				</div>
			</section>
			<section id="principal">
				<div id="admin">
					<section class="sect-admin">
						<header>
							<h3>Eliminar Post</h3>
						</header>
							<input placeholder="Seleccione titulo..." list="browsers">
							<datalist id="browsers">'.$opciones.'
							</datalist>
						    <input type="submit" value="Eliminar" action="'.$postController->del($opciones).'">
						
					</section>
				</div>
			</section>

');

	#<input type="button" value="Eliminar" onclick = "'.$postController->del().'">