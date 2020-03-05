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
	<!-- =========================================================================================================================== -->
	<!-- Google Analytics -->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-115413-3', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- =========================================================================================================================== -->
</head>
<body>
	<header>
		<div class="logo">
			<a href="/"><img src="/img/logo-scub.svg"></a>
		</div>
		<nav id="ml-menu" class="menu">
			<!-- Close button for mobile version -->
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="">
				<ul class="nav__main">
					<li class="menu__item" id="nos-missions">
						<a class="menu__link" href="/relation-client"><span class="<?php if (!empty($menu) && $menu == 'nos-missions') { echo 'menu__link--current'; } ?>">Nos missions</span></a>
						<ul class="nav__child <?php if (!empty($menu) && $menu == 'nos-missions') { echo 'nav__child--open'; } ?>">
							<li class="menu__item" id="relation-client"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'relation-client') { echo 'menu__sublink--current'; } ?>" href="/relation-client">Améliorer la relation client assureur-assurés</a></li>
							<li class="menu__item" id="operations-internes"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'operations-internes') { echo 'menu__sublink--current'; } ?>" href="/operations-internes">Optimiser vos opérations internes</a></li>
							<li class="menu__item" id="obligations-reglementaires"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'obligations-reglementaires') { echo 'menu__sublink--current'; } ?>" href="/obligations-reglementaires">Respecter vos obligations réglementaires</a></li>
						</ul>
					</li>
					<li class="menu__item" id="nos-solutions">
						<a class="menu__link" href="/developpement-agile"><span class="<?php if (!empty($menu) && $menu == 'nos-solutions') { echo 'menu__link--current'; } ?>">Nos solutions</span></a>
						<ul class="nav__child <?php if (!empty($menu) && $menu == 'nos-solutions') { echo 'nav__child--open'; } ?>">
							<li class="menu__item" id="developpement-agile"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'developpement-agile') { echo 'menu__sublink--current'; } ?>" href="/developpement-agile">Développement agile de logiciels sur-mesure</a></li>
							<li class="menu__item" id="centre-services"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'centre-services') { echo 'menu__sublink--current'; } ?>" href="/centre-services">Centre de services informatiques</a></li>
							<li class="menu__item" id="innovation"><a class="menu__link <?php if (!empty($submenu) && $submenu == 'innovation') { echo 'menu__sublink--current'; } ?>" href="/innovation">Innovation digitale & performance</a></li>
						</ul>
					</li>
					<li class="menu__item" id="recrutement"><a class="menu__link" href="/recrutement"><span class="<?php if (!empty($menu) && $menu == 'recrutement') { echo 'menu__link--current'; } ?>">Recrutement</span></a></li>
					<li class="menu__item" id="contact"><a class="menu__link" href="/contact"><span class="<?php if (!empty($menu) && $menu == 'contact') { echo 'menu__link--current'; } ?>">Contact</span></a></li>
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
