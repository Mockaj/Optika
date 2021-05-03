<?php
require_once 'inc/Database.php';

$myPost = filter_input_array(INPUT_POST);
$database->objednavky->insert($myPost);



$jmeno = $_POST['jmeno'];
$prijmeni = $_POST['prijmeni'];
$email = $_POST['email'];
$telefon= $_POST['telefon'];


$predmet = "Nová objednávka vyšetření";
$message = "
Jméno pacienta: $jmeno $prijmeni
E-mail: $email
Telefon: $telefon


";

if ($jmeno!="" and $email!="")
{
    # We no longer want to send an email to client with message saying wait for the confirmation of your request
     Mail("info@optikaocni.eu", $predmet, $message, "From: " . $email);
$database->vzkazy->insert($myPost);
header('Location: odeslano');
exit;
}
else
{
header('Location: neodeslano');
exit;
}
exit;
?>