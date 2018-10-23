<html>
  <head>
    <title>LeBonRetro</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="author" content="Léon Davi" />
  </head>

  <body>
    <header>
      <h1>Vendeurs</h1>
    </header>
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
