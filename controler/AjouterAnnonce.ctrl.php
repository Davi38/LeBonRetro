<?php
  // Inclusion du modèle
  include_once("../model/DAO.class.php");

  // pour créer une session qui contiendra le nom, telephone et mail du vendeur
  session_start();

  $erreur = "";

  if (isset($_GET['nom'])) {
    if ($_GET['nom'] != '') {
      $nom = $_GET['nom'];
    } else {
      $erreur .= 'Nom manquant, ';
    }
  }

  if (isset($_GET['des'])) {
    if ($_GET['des'] != '') {
      $des = $_GET['des'];
    } else {
      $erreur .= 'Description manquante, ';
    }
  }

  if (isset($_GET['prix'])) {
    if ($_GET['prix'] != '') {
      $prix = $_GET['prix'];
    } else {
      $erreur .= 'Prix manquant, ';
    }
  }

  if (isset($_GET['cat'])) {
    if ($_GET['cat'] != '') {

      // on cherche si la categorie envoyée par l'utilisateur existe
      $getCat = $dao->getAllCategorie();

      foreach ($getCat as $value) {
        //var_dump($value[0]);
        if ($value[0] == $_GET['cat']) {
          $cat = $_GET['cat'];
        }
      }

      if (!isset($cat)) {
        $erreur .= "La catégorie donnée n'existe pas (ordinateur, telephone, decoration)";
      }

    } else {
      $erreur .= 'Catégorie manquante, ';
    }
  }

  if (isset($cat)) {
    $img = $cat;
  }

  if (isset($_GET['loc'])) {
    if ($_GET['loc'] != '') {
      $loc = $_GET['loc'];
    } else {
      $erreur .= 'Localisation manquante, ';
    }
  }

  if (isset($nom) && isset($des) && isset($prix) && isset($img) && isset($cat) && isset($loc)) {
    $newid = $dao->newIdentifiant(); // identifiant unique

    date_default_timezone_set('UTC'); // Définit le fuseau horaire par défaut à utiliser
    $today = date("d.m.y"); // data au jour d'aujourd'hui

    $_SESSION['nom'] = "Davi";
    $nomVendeur = $_SESSION['nom']; // nom du vendeur qui dépose l'annonce (stocké dans les variables de sessions)

    $vendeur = $dao->addArticle($newid,$nom,$des,$nomVendeur,$prix,$img,$cat,$today,$loc);
  } else {
    include("../view/ajouterAnnonce.view.php");
    echo '<script> alert("La page a renvoyée les erreurs suivantes : ' . $erreur . '") </script>';
  }

  //$vendeur = $dao->getVendeur($_GET['id'], $_GET['mdp']);



  //$articles = $dao->getN(2,1);
  // Charge la vue
  //include("../view/articles.view.php");
?>
