<?php
// Inclusion du modèle
include_once("../model/DAO.class.php");

session_start();

if (isset($_GET['nom']) && isset($_GET['mail']) && isset($_GET['tel']) && isset($_GET['id']) && isset($_GET['mdp']) && isset($_GET['confmdp'])) {
  if ($_GET['nom'] && $_GET['mail'] && $_GET['tel'] && $_GET['id'] && $_GET['mdp'] && $_GET['confmdp']) {
    if ($_GET['mdp'] == $_GET['confmdp']) {
      $testvendeur = $dao->getVendeur($_GET['id'], $_GET['mdp']);
      if (!$testvendeur) {
        $vendeur = $dao->addVendeur($_GET['nom'],$_GET['tel'],$_GET['mail']); // + id et mdp
        $_SESSION['nom'] = $vendeur->nom;
        $_SESSION['telephone'] = $vendeur->telephone;
        $_SESSION['mail'] = $vendeur->mail;
        header('Location: ../view/main.view.php');
        exit();
      } else {
        include("../view/inscription.view.php");
        echo '<script> alert("Cet indentifiant et ce mot de passe sont déjà pris. Veuillez réessayer.") </script>';
      }
    } else {
      include("../view/inscription.view.php");
      echo '<script> alert("Les mots de passe saisis sont différents. Veuillez réessayer.") </script>';
    }
  } else {
    include("../view/inscription.view.php");
    echo '<script> alert("Tous les champs doivent être remplis. Veuillez réessayer.") </script>';
  }
}


?>
