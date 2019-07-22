<?php
    $title = 'Contacter SCUB | SSII ESN à Angoulême - Bordeaux - Paris';
    $description = 'À la recherche d\'une solution logicielle sur-mesure et adaptée à votre projet ? Contactez SCUB, SSII ESN à Bordeaux, SSII ESN à Angoulême et SSII ESN à Paris.';
    include_once('header.php');
	include_once('contact_request.php');
    ?>
	<main data-menu-parent="Contact">
		<section class="contact-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 left">
						<h1>Prendre contact<br>
							<span>avec Scub :</span>
						</h1>
						<img src="img/mouse.svg" class="Défiller vers le bas">
					</div>
					<div class="col-lg-6 right">
						<h2>Trouvons la solution logicielle adaptée à votre projet.</h2>
						<form method="POST">
							<input type="text" name="name" placeholder="Nom / Prénom*">
							<input type="text" name="company" placeholder="Nom de l'entreprise">
							<input type="email" name="email" placeholder="Email*">
							<input type="tel" name="tel" placeholder="Téléphone*">
							<textarea name="subject" placeholder="Votre message"></textarea>
							<span class="submit">
								<input type="submit" name="submit" value="Envoyer">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 10"><defs><style>.darkfill{fill:black;}</style></defs><title>link-arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="arrow" class="darkfill" d="M19.87,5.32,15.32,9.87a.45.45,0,0,1-.77-.32.49.49,0,0,1,.13-.33l3.77-3.77H.45a.45.45,0,0,1,0-.9h18L14.68.78a.49.49,0,0,1-.13-.33.45.45,0,0,1,.77-.32l4.55,4.55A.46.46,0,0,1,19.87,5.32Z"></path></g></g></svg>
							</span>
							<div class="status-message">
								<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") 
									echo $statusMsg;
								?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="place">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 item" style="background-image: url(img/1_PRENDRE_CONTACT.jpg);">
						<div class="nb">01
							<div class="desc">
								<b>SSII ESN</b><br>
								à Angoulême
							</div>
						</div>
					</div>
					<div class="col-lg-4 item" style="background-image: url(img/2_PRENDRE_CONTACT.jpg);">
						<div class="nb">02
							<div class="desc">
								<b>SSII ESN</b><br>
								à Bordeaux
							</div>
						</div>
					</div>
					<div class="col-lg-4 item" style="background-image: url(img/3_PRENDRE_CONTACT.jpg);">
						<div class="nb">03
							<div class="desc">
								<b>SSII ESN</b><br>
								à Paris
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include_once('footer.php'); ?>