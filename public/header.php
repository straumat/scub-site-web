<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php if(empty($title)) { echo 'SCUB | ESN spécialiste digital des métiers de l’assurance'; } else { echo $title; } ?></title>
	<meta name="description" content="<?php if(empty($description)) { echo 'ESN à Bordeaux, Angoulême et Paris, SCUB est un éditeur de logiciels CRM spécialiste de la relation client et de la digitalisation des métiers de l’assurance.'; } else { echo $description; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/component.css">
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="icon" href="/img/SCUB_LOGO_128PX.ico" />
    <meta property="og:image" content="https://www.scub.net/img/SCUB-VISU-FB-1200X628.png" />
</head>
<body>
	<header>
		<div class="logo">
			<a href="/"><img src="/img/logo-scub.svg"></a>
		</div>
		<nav id="ml-menu" class="menu">
		<!-- Close button for mobile version -->
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level">
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-1" href="#!">Nos missions</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-2" href="#!">Nos solutions</a></li>
					<li class="menu__item"><a class="menu__link" href="/recrutement">Recrutement</a></li>
					<li class="menu__item"><a class="menu__link" href="/contact">Contact</a></li>
				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="/relation-client">Améliorer la relation client assureur-assurés</a></li>
					<li class="menu__item"><a class="menu__link" href="/operations-internes">Optimiser vos opérations internes</a></li>
					<li class="menu__item"><a class="menu__link" href="/obligations-reglementaires">Respecter vos obligations réglementaires</a></li>
				</ul>
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="/developpement-agile">Développement agile de logiciels sur-mesure</a></li>
					<li class="menu__item"><a class="menu__link" href="/centre-services">Centre de services informatiques</a></li>
					<li class="menu__item"><a class="menu__link" href="/innovation">Innovation digitale & performance</a></li>
				</ul>
			</div>
		</nav>
		<div class="menu-social">
			<a href="https://twitter.com/scub_france" target="_blank">
				<img src="/img/picto-twitter.svg" alt="Twitter">
			</a>
			<a href="https://www.facebook.com/scubFrance" target="_blank">
				<img src="/img/picto-facebook.svg" alt="Facebook">
			</a>
			<a href="https://fr.linkedin.com/company/scub" target="_blank">
				<img src="/img/picto-linkedin.svg" alt="LinkedIn">
			</a>
		</div>
	</header>
	<div id="mobile-header">
		<a href="/"><img src="/img/logo-scub.svg"></a>
		<div class="toggle-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
