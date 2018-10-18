<?php
  // Inclusion du modèle
  include_once("../model/DAO.class.php");
  //var_dump($articles);


  $articles = $dao->getAllArticle();
  // Charge la vue
  include("../view/articles.view.php")
?>
