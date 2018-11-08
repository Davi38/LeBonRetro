<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>

  <body>
    <?php include("../view/menu.view.php"); ?>

    <form action="../controler/Controlleur.ctrl.php" method="GET" class="formulaire_article_choix">
      <input type="hidden" value="1" name="choixMultiple" />
      <div class="choix_tri">
        <p>
          Catégorie :
          <select name="categorie">
             <option value="all">Toutes catégories</option>
             <option value="ordinateur" <?php if($cat=="ordinateur"){echo"selected";} ?> >Ordinateur</option>
             <option value="telephone" <?php if($cat=="telephone"){echo"selected";} ?> >Téléphone</option>
             <option value="decoration" <?php if($cat=="decoration"){echo"selected";} ?> >Décoration</option>
          </select>
        </p>
      </div>
      <div class="choix_tri">
        <p>
          Localisation :
          <input type="texte" name="localisation" <?php echo'value="'.$loc.'"'; ?>/>
        </p>
      </div>
      <div class="choix_tri">
        <p>
          Trier par :
          <select name="tri">
             <option value="DatePublication" <?php if($tri=="DatePublication"){echo"selected";} ?> >Date</option>
             <option value="prix" <?php if($tri=="prix"){echo"selected";} ?> >Prix</option>
             <option value="nom" <?php if($tri=="nom"){echo"selected";} ?> >Ordre alphabétique</option>
          </select>
        </p>
      </div>
      <input type="submit" name="action" value="Valider" />
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
        if ($cat==null) {
    ?>
    <p class="changementPage"><a href="../controler/Controlleur.ctrl.php?debut=<?php $c=$debut-5; echo "$c"; ?>"> < Page précédente</a>
    <a href="../controler/Controlleur.ctrl.php?debut=<?php $c=$debut+5; echo "$c"; ?>">Page suivante > </a></p>
    <?php } ?>
  </body>
</html>
