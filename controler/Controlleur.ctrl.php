<?php
  // Inclusion du modèle
  include_once("../model/DAO.class.php");

  if (isset($_GET['categorie'])) {
    if ($_GET['categorie'] == "all") {
      $articles = $dao->getAllArticle();
    } else {
    $articles = $dao->getArticlesCategorie($_GET['categorie']);
    }
    include("../view/articles.view.php");

  } elseif (isset($_GET['vendeur'])) {
    if ($_GET['vendeur'] == "1") {
      $vendeurs = $dao->getAllVendeur();
      include("../view/vendeurs.view.php");
    }

  } elseif (isset($_GET['article'])) {
      $annonce = $dao->getArticle($_GET['article']);
      $annonce = reset($annonce);
      if ($annonce) {
        include("../view/annonce.view.php");
      } else {
        include("../view/main.view.php");
      }

  } else {
    $articles = $dao->getAllArticle();
    include("../view/articles.view.php");
  }

  //$articles = $dao->getN(2,1);
  // Charge la vue
  //include("../view/articles.view.php");
?>
