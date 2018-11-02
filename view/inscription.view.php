<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("../view/entete.view.html"); ?>
  </head>
  <body>

    <?php include("../view/menu.view.php");?>

    <form action="../controler/Inscription.ctrl.php" method="GET">
      <fieldset>
        <p>Nom : </p>
        <input type="texte" name="nom" autofocus required/>
        <p>Adresse email : </p>
        <input type="email" name="mail" required/>
        <p>Telephone : </p>
        <input type="tel" name="tel" required/>
        <p>Identifiant : </p>
        <input type="texte" name="id" required/>
        <p>Mot de passe : </p>
        <input type="password" name="mdp" required/>
        <p>Confirmation du mot de passe : </p>
        <input type="password" name="confmdp" required/>

        <br>
        <input type="submit" name="action" value="Valider" />
      </fieldset>
    </form>

  </body>
</html>
