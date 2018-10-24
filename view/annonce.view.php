<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
    <?php include("../view/menu.view.php"); ?>
    <h1>Articles</h1>

    <?php
        print '<div class="annonce"><img src="../data/images/' . $annonce->image . '" alt="Photo article" width="200" height="200">';
        print "<strong>$annonce->nom</strong><br><br>";
        print "$annonce->prix<br>$annonce->datePublication<br>";

        print "<strong>Description</strong>";
        print "<strong>$annonce->description</strong>";

        print "<strong>Localisation</strong>";
        print "<strong>$annonce->localisation</strong>";
        print "</div>";

    ?>
  </body>
</html>
