<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove MORALspace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
        $subject = filter_var(trim($_POST["subject"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Set the recipient email address.
        $recipient = "contact@scub.net";

        // Set the email subject.
        $subject = "Nouveau contact de $name";

        // Build the email content.
        $email_content = "Nom: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Téléphone: $phone\n\n";
        $email_content .= "Sujet: $subject\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            error_log("Thank You! Your message has been sent.");
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            error_log("Oops! Something went wrong and we couldn't send your message.");
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        error_log("There was a problem with your submission, please try again.");
    }
