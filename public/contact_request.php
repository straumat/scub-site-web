<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$status = false;
	$statusMsg = 'Ok';

	// if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	// 	$fgt = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LfX050UAAAAAPWYJcKYPZVT4P9yImK-tLZWrfc0&response='.$_POST['g-recaptcha-response']);

	//     if (false === $fgt)
	// 	    $statusMsg = 'Erreur de verification du captcha (code 1).';
	//     else {
	// 	    $responseData = json_decode($fgt); 
		     
	// 	    if ($responseData->success) {
				$name = test_input($_POST["name"]);
				$company = test_input($_POST["company"]);
				$email = test_input($_POST["email"]);
				$tel = test_input($_POST["tel"]);
				$subject = test_input($_POST["subject"]);

				if (false != filter_var($email, FILTER_VALIDATE_EMAIL)) {
					if (!empty($name) && !empty($tel)) {
					    $to = 'contact@scub.net';
				        $htmlContent = "<p><b>Nom / prénom:</b> $name</p>
				            <p><b>Entreprise:</b> $company</p>
				            <p><b>Email:</b> <a href='mailto://$email'>$email</a></p> 
										<p><b>Téléphone:</b> <a href='tel://$tel'>$tel</a></p>
										<p><b>Sujet:</b> $subject</p>";
				        $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom:SCUB - Demande de contact <$email>\r\n"; 
				         
				        // Send email 
				        if (mail($to, 'SCUB - Demande de contact', $htmlContent, $headers)) {
					        $status = true;
					        $statusMsg = 'Votre demande a bien été transmise.'; 
				        } else
				        	$statusMsg = 'Une erreur est survenu durant <br />le traitement, veuillez retenter <br />ulterieurement';
					} else
				    	$statusMsg = "Veuillez remplir tout les champs obligatoires du formulaire."; 
				} else
			    	$statusMsg = "Veuillez entrer une adresse mail valide."; 
	// 	    } else
	// 	    	$statusMsg = 'Erreur de verification du captcha (code 2).';
	//     }
	// } else
	//     $statusMsg = 'Erreur de verification du captcha (code 0).';
}
?>