<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LeBonRetro</title>
  </head>
  <body>

    <?php include("../view/menu.view.php"); echo 'ici';?>

    <form action="../controler/Authentification.ctrl.php" method="GET">
      <fieldset>

        <p>Identifiant : </p>
        <input type="texte" name="id" autofocus/>
        <p>Mot de passe : </p>
        <input type="texte" name="mdp"/>
        <br>
        <input type="submit" name="action" value="Valider" />
      </fieldset>
    </form>

  </body>
</html>
