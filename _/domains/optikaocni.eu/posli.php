<?php

if (isset($_POST)) {
	$jmeno = $_POST['jmeno'];
	$predmet = $_POST['predmet'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	$server_email = "info@optikaocni.eu";

	$email_headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n" . "From: <$server_email>" . "\r\n" . "Reply-To: <$email>" . "\r\n" . "X-Mailer: PHP v" . phpversion() . "\r\n";

	mail ($server_email, $predmet, $text, $email_headers);
}
Header('Location: kontakt?odeslani-ok');