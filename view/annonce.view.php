<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
    <?php include("../view/menu.view.php"); ?>
    <h1>Article</h1>

    <?php
        print '<div class="annonce"><img src="../data/images/' . $annonce->image . '" alt="Photo article" width="200" height="200">';
        print "<h2>$annonce->nom</h2><br><br>";
        print "Prix : $annonce->prix €<br>Date de publication : $annonce->datePublication<br>";

        print "Description : ";
        print "$annonce->libelle<br>";

        print "Localisation : ";
        print "$annonce->localisation<br>";
        print "</div>";

    ?>
  </body>
</html>
