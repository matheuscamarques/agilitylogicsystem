<?php
include "./../../config/connection.php";

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "matheuscamarques@gmail.com";

$to = $_POST["email"];

$subject = $_POST["nome"];

$message = $_POST["mensagem"];

$numero = $_POST["fone"];

$headers = "De:". $from;

$message = $message." ".$numero;
mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";

?>