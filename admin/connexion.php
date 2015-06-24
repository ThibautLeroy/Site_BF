<?php
$bdd = new PDO('mysql:host=localhost;dbname=BK;charset=utf8', 'root', 'root');

// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM clients WHERE email = :email AND pass = :pass');
$req->execute(array(
    'email' => $_POST['email'],
    'pass' => $pass_hache
    ));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
    header('Location: ../index.php');
}
?>