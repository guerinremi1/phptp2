<?php
include 'formulaire.php';
$action = $_POST['action'];
if($action == 'mailer')
{
 $Id = $_POST['Id'];
 $male = $_POST['male'];
 $femme = $_POST['femme'];
 $email = $_POST['email'];
 $mdp = $_POST['mdp'];
 $pays = $_POST['pays'];
 $cgu = $_POST['cgu'];

    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL . $Id;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $mdp;
    echo $message;
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>