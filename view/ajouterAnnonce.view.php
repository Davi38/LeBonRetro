<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>
  <body>
    <?php include("../view/menu.view.php"); ?>

    <form action="../controler/AjouterAnnonce.ctrl.php" method="GET">
      <fieldset>

        <p>Nom de votre annonce : </p>
        <input type="texte" name="nom" autofocus/>
        <p>Description : </p>
        <input type="texte" name="des"/>
        <p>Prix : </p>
        <input type="texte" name="prix"/>
        <p>Image : </p>
        <input type="texte" name="img"/>
        <p>Categorie : </p>
        <input type="texte" name="cat"/>
        <p>Localisation : </p>
        <input type="texte" name="loc"/>
        <!-- Le programme rempli automatiquement : identifiant (unique), nom du vendeur (il est connecté donc on récupère son nom), date de publication (date actuel) -->




        <br><br>
        <input type="submit" name="action" value="Valider" />
      </fieldset>
    </form>

  </body>
</html>
