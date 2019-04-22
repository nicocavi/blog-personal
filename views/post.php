<?php

	$postController = new PostController();
	$post = $postController->search($_GET['r']);
	if (empty($post)) {
		$error = new ViewController();
		$error->load_view('error404'); 
	}else{
		$templatePost = 
		'<!DOCTYPE html>
		<html>
		<head>
			<title>Nicolas Cavilla</title>
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
			<aside id="redes">
				<ul>
					<li><img src="./public/img/github.svg" alt="github"></li>
					<li><img src="./public/img/twitter.svg" alt="twitter"></li>
					<li><img src="./public/img/email.svg" alt="email"></li>
				</ul>
			</aside>
				<section id="principal">
					<article id="post">
						<header>
							<h1>
								'.$post[0]['titulo'].'
							</h1>
							<p>
								'.$post[0]['subtitulo'].'
							</p>
						</header>		
								'.$post[0]['cuerpo'].'
					</article>
				</section>';
		print($templatePost);	
	}


