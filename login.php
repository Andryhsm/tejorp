<?php

session_start();

require 'cnx.php';
require_once 'phash.php';

$login = $_POST['login'];
$mdp = $_POST['mdp'];

if ($login == "" || $mdp == "") {
    echo 'Veillez entrer votre login et votre mot de passe';
} else {

//$reponse = $bdd->query("SELECT * FROM prescripteur WHERE mdp = '" . $mdp . "'");
    $reponse1 = $bdd->query("SELECT * FROM prescripteur WHERE login = '" . $login . "'");

//$isa = $reponse->rowCount();
    $isa1 = $reponse1->rowCount();
    $donnees = $reponse1->fetch();

    if (phash::check_password($donnees['mdp'], $mdp)) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $donnees['id'];
        $_SESSION['photo'] = $donnees['photo'];
        $_SESSION['nom'] = $donnees['nom'];
        $_SESSION['prenom'] = $donnees['prenom'];
        $_SESSION['tel'] = $donnees['tel'];
        $_SESSION['email'] = $donnees['email'];
        $_SESSION['rue'] = $donnees['rue'];
        $_SESSION['code-postal'] = $donnees['code-postal'];
        $_SESSION['ville'] = $donnees['ville'];
        $_SESSION['etablissement'] = $donnees['etablissement'];
        $_SESSION['statut'] = $donnees['statut'];
        echo 'succes';
    } else {
        echo 'Verifier votre login ou mot de passe';
    }
}