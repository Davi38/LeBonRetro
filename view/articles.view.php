<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
    <?php include("../view/menu.view.php"); ?>
    <h1>Articles</h1>

    <?php
        foreach ($articles as $article) {
          print '<a href="../controler/Controlleur.ctrl.php?article=' . $article->ref . '"><article><img src="../data/images/' . $article->image . '" alt="Photo article" width="200" height="200">';
          print "<strong>$article->nom</strong><br><br>";
          print "$article->categorie<br>$article->localisation<br>";
          print "<strong>$article->prix €</strong>";
          print "</article></a>";
        }
    ?>
  </body>
</html>
