<?php
  // Inclusion du modèle
  include_once("../model/DAO.class.php");

  // pour créer une session qui contiendra le nom, telephone et mail du vendeur
  session_start();

  if (isset($_GET['id']) && isset($_GET['mdp'])) {
    $vendeur = $dao->getVendeur($_GET['id'], $_GET['mdp']);

    if ($vendeur) { // si le vendeur existe alors on crée une variable de session
      $_SESSION['nom'] = $vendeur->nom;
      $_SESSION['telephone'] = $vendeur->telephone;
      $_SESSION['mail'] = $vendeur->mail;

      header('Location: ../view/main.view.php');
      exit();

    } else {
      include("../view/authentification.view.php");
      echo '<script> alert("Identifiant ou mot de passe incorrect") </script>';
    }

  } elseif (isset($_GET['deconnexion'])) {
    unset($_SESSION['nom']);
    unset($_SESSION['telephone']);
    unset($_SESSION['mail']);

    header('Location: ../view/main.view.php');
    exit();
  }  else {
    include("../view/main.view.php");
  }



  //$articles = $dao->getN(2,1);
  // Charge la vue
  //include("../view/articles.view.php");
?>
