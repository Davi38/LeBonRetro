<html>
  <head>
    <title>LeBonRetro</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="author" content="Léon Davi" />
    <link rel="shortcut icon" href="data/images/logo_lebonretro.jpg" />
    <link rel="stylesheet" type="text/css" href="../data/style.css">

  </head>

  <body>
    <h1><a href="main.view.php">LeBonRetro</a></h1>
      <?php include("../view/menu.view.php"); ?>
      <h1>Vendeurs</h1>
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
