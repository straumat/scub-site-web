<?php
	$title = 'Blockchain et santé : digitaliser les ordonnances médicales | SCUB';
	$description = 'Découvrez Smart Order, une solution mêlant blockchain et smart-contracts, pour assurer le suivi, l\'historisation et la sécurisation des ordonnances médicales.';
    include_once('../header.php');
    ?>
	<main>
		<section class="post-top text-center">
			<time datetime="2019-07-02">Juillet 02 / 2019</time>
			<h1>Blockchain et santé :<br>
				<span>preuve de concept<br>
				pour des ordonnances distribuées</span>
			</h1>
		</section>
		<section class="post-content">
			<div class="img-wrapper">
				<img src="/img/BLOCKCHAIN-SANTE.jpg" alt="Blockchain et santé">
			</div>
			<article>
				<p>La prescription comme la délivrance de médicaments sont des actes incontournables de l’activité médicale mais ils sont pourtant complexes à appréhender. De nombreux acteurs sont impliqués dans le processus et ils peuvent avoir des avis ou des intérêts divergents.</p>
				<p>Ces actes sont des marqueurs du parcours de soin et présentent en tant que tels des enjeux considérables en termes de traçabilité. La fraude, ainsi que les erreurs de prescription, de délivrance ou de dispensation sont lourdes de conséquences humaines et financières. Une démarche de sécurisation dans le domaine est indispensable.</p>
				<p>La transformation numérique déjà en cours a permis des améliorations mais son avancement demeure inégal selon les lieux et les types d’activités. Cette évolution doit se poursuivre pour perfectionner les processus actuels et permettre de nouveaux usages. Le système de demain ne pourra néanmoins pas se soustraire aux fortes contraintes législatives qui encadrent le domaine de la santé, tel que le secret médical.</p>
				<p>C’est dans ce contexte que SCUB a imaginé Smart Order, une solution basée sur la technologie <i>blockchain</i> et sur les smart-contracts, qui permet d’assurer un suivi, une historisation et une meilleure sécurisation des échanges entre les différentes parties.</p>

                <p>Voici le lien vers l'article technique complet sur <a class="btn" href="https://scub-france.github.io/smart-order/" target="article">la gestion des ordonnances avec la blockchain Ethereum</a> et vous trouverez <a class="btn"  href="https://github.com/scub-france/smart-order" target="github">ici</a> les sources et les instructions pour tester.</p>

                <h2><i>Blockchain</i> & <i>Smart-contracts</i></h2>
				<h3><i>Blockchain</i></h3>
				<p>La <i>blockchain</i> (“chaîne de bloc” en français) est une technologie apparue en 2008. Elle permet le stockage et la transmission d’informations. Il s’agit d’une base de données mondiale, partagée entre utilisateurs et fonctionnant sans organe central de contrôle. Elle contient l’historique complet de tous les échanges entre utilisateurs depuis sa création. Toute personne ayant accès au réseau peut consulter les données en temps réel et interagir avec elle.  Une <i>blockchain</i> peut être publique (ouverte à tous) ou privée. Son accès et son utilisation sont alors restreints à un certain nombre d’acteurs. Dans le cadre d’une <i>blockchain</i> publique, le réseau en charge du maintien opérationnel de la <i>blockchain</i> est mondial et librement accessible.</p>
				<h3><i>Smart-contracts</i></h3>
				<p>Un smart-contract est un programme autonome résidant dans la <i>blockchain Ethereum</i> et qui exécute automatiquement les conditions et les termes d’un contrat prédéfini, sans nécessiter d’intervention humaine.</p>
				<p>Les transactions étant publiques, chaque action accomplie par le programme est consignée et horodatée et les acteurs utilisant ces fonctionnalités sont identifiés par une identité numérique ne permettant pas d’identifier simplement la personne physique.</p>
				<h2>Notre propre <i>smart-order</i></h2>
				<p>Dans le cadre de notre preuve de concept, nous avons choisi d’utiliser la <i>blockchain</i> publique <i>Ethereum</i>. Les opérations effectuées par le programme et les informations affichées proviennent exclusivement de cette <i>blockchain</i>. Les interfaces utilisateur que nous avons développées permettent d’itérer sur les principales étapes du cycle de vie d’une ordonnance. Ainsi le prototype permet à un docteur de rédiger et d’émettre une ordonnance puis à un pharmacien de la consulter et d’en délivrer des éléments.</p>
				<p>Au moment ou le pharmacien valide la délivrance, le smart-contract vérifie la cohérence de l’acte et la conformité des signatures puis les modalités de la délivrance sont ensuite archivées dans la <i>blockchain</i>.</p>
				<h3>Spécificités</h3>
				<p>Si la technologie de stockage <i>blockchain</i> assure la disponibilité et l’authenticité des données, elle ne garantit cependant pas leur validité. Les smart-contracts répondent à cette problématique en permettant de spécifier les règles d’exécution du programme.</p>
				<h3>Intégrité et traçabilité</h3>
				<p>Pour qu’une ordonnance puisse être émise ou modifiée, toutes les parties prenantes doivent utiliser leur identité numérique pour signer une empreinte décrivant les modalités de l’acte. Ces signatures sont infalsifiables, non réutilisables et irrévocables.</p>
				<h2>Et ensuite ?</h2>
				<p>Si le prototype démontre bien la faisabilité du concept, le travail de réflexion qui a été engagé va encore plus loin et des développements restent à entreprendre. Ci-dessous des exemples de thématiques que SCUB souhaiterait à présent explorer :
					<ul>
						<li>Faire fonctionner notre solution avec des logiciels d’aide à la prescription ou même des armoires à pharmacies ;</li>
						<li>Associer le prototype à des techniques cryptographiques dites de « dérivation » qui permettent de fournir aux acteurs des identifiants à usage unique à partir d’un mot de passe personnel. Elle pourrait par exemple permettre à un patient de partager automatiquement avec un tiers de confiance toutes ses ordonnances en relation avec un épisode médical particulier, ou encore émises après une date donnée ;</li>
						<li>Réaliser une série d’études complémentaires pour éprouver la fiabilité de la solution et quantifier les coups d’une mise en production.</li>
					</ul>
				</p>
				<div class="text-right">
					<a class="btn black" href="/contact" target="_blank">Interroger SCUB
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 10"><defs><style>.whitefill{fill:black;}</style></defs><title>link-arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="arrow" class="whitefill" d="M19.87,5.32,15.32,9.87a.45.45,0,0,1-.77-.32.49.49,0,0,1,.13-.33l3.77-3.77H.45a.45.45,0,0,1,0-.9h18L14.68.78a.49.49,0,0,1-.13-.33.45.45,0,0,1,.77-.32l4.55,4.55A.46.46,0,0,1,19.87,5.32Z"></path></g></g></svg>
					</a>
				</div>
			</article>
		</section>
		<?php include_once('../posts.php'); ?>
		<?php include_once('../footer.php'); ?>
