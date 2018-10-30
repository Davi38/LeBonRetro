<?php
  // Inclusion du modèle
  include_once("../model/DAO.class.php");

  if (isset($_GET['choixMultiple'])) {
    if (isset($_GET['categorie'])) {
      if ($_GET['categorie'] != "all") {
        $cat = $_GET['categorie'];
      }else {
        $cat = null;
      }
    } else {
      $cat = null;
    }
    if (isset($_GET['localisation'])) {
      $loc = $_GET['localisation'];
    } else {
      $loc = null;
    }
    if (isset($_GET['tri'])) {
      $tri = $_GET['tri'];
    } else {
      $tri = null;
    }
    $articles = $dao->getArticlesCriteresMultiple($cat, $loc, $tri);
    include("../view/articles.view.php");
  }

  else {
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

    } /*elseif (isset($_GET['localisation'])) {
      if ($_GET['localisation'] != "") {
        $articles = $dao->getArticlesLocalisation();
        include("../view/articles.view.php");
      }
    }*/
    else {
      $articles = $dao->getAllArticle();
      include("../view/articles.view.php");
    }
  }

  //$articles = $dao->getN(2,1);
  // Charge la vue
  //include("../view/articles.view.php");
?>
