<?php

$bdd = new PDO('mysql:host=localhost;dbname=BK;charset=utf8', 'root', 'root');



$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$pass_hash = sha1(htmlspecialchars($_POST['pass']));



$req = $bdd->prepare('INSERT INTO clients(nom, prenom, email, tel, pass) VALUES(:nom, :prenom, :email, :tel, :pass)');
$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'email' => $email,
	'pass' => $pass_hash,
	'tel' => $phone
	));

?>
