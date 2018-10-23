<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Bricomachin</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="author" content="Léon Davi" />
  </head>

  <body>
    <header>
      <h1>Articles</h1>
    </header>
      <?php
          foreach ($articles as $article) {
            //print "<article><h2>$article->nom<br>";
            //print "<br>$article->prix \u20ac</h2></article>";
            print "<article><h2>$article->nom ";
            print "$article->prix euros</h2></article>";
          }

      ?>
  </body>
</html>
