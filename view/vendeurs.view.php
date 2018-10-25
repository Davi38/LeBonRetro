<html>
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
      <?php include("../view/menu.view.php"); ?>
      <?php
          foreach ($vendeurs as $vendeur) {
            //print "<article><h2>$article->nom<br>";
            //print "<br>$article->prix \u20ac</h2></article>";
            print "<article><h2>$vendeur->nom ";
            print "$vendeur->telephone $vendeur->mail</h2></article>";
          }

      ?>
  </body>
</html>
