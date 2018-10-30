<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
    <?php include("../view/menu.view.php"); ?>

    <form action="../controler/Controlleur.ctrl.php" method="GET">
      <input type="hidden" value="1" name="choixMultiple" />
      <fieldset>
        <p>
          Catégorie :
          <select name="categorie">
             <option value="ordinateur">Ordinateur</option>
             <option value="telephone">Téléphone</option>
             <option value="decoration">Décoration</option>
             <option value="all" selected>Toutes catégories</option>
          </select>
        </p>
        <p>
          Localisation :
          <input type="texte" name="localisation"/>
        </p>

        <p>
          Trier par :
          <select name="tri">
             <option value="DatePublication">Date</option>
             <option value="prix">Prix</option>
             <option value="nom">Ordre alphabétique</option>
          </select>
        </p>
        <input type="submit" name="action" value="Valider" />
      </fieldset>
    </form>

    <?php
        foreach ($articles as $article) {
          print '<a class="lien" href="../controler/Controlleur.ctrl.php?article=' . $article->ref . '">';
          echo '<article><img src="../data/images/' . $article->image . '" alt="Photo article" width="200" height="200">';
          print "<h2>$article->nom</h2>";
          print "$article->categorie<br>$article->localisation";
          print '<p class="prix"> ' . $article->prix . ' €</p>';
          print '<p>Publié le ' . $article->datePublication . '</p>';
          print "</article></a>";
        }
    ?>
  </body>
</html>
