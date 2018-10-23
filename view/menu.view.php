<ul>
  <li><a href="controler/Controlleur.ctrl.php?categorie=ordinateur">Ordinateurs</a></li>
  <li><a href="controler/Controlleur.ctrl.php?categorie=telephone">Téléphones</a></li>
  <li><a href="controler/Controlleur.ctrl.php?categorie=decoration">Décoration</a></li>
  <li><a href="controler/Controlleur.ctrl.php?categorie=all">TOUT !</a></li>
  <li><a href="controler/Controlleur.ctrl.php?vendeur=1">Vendeurs</a></li>

  <?php
    session_start();
    if (!isset($_SESSION['nom'])) {
      echo '<li><a href="view/authentification.view.php">Se connecter</a></li>';
    } else {
      echo '<li><button onclick="deconnexion()" class="deconnexion">Deconnexion</button></li>';
    }
  ?>
</ul>

<script>
function deconnexion() {
  var r = confirm("Etes vous sûr de vouloir vous déconnecter ?");
  if (r) {
    location.replace("controler/Authentification.ctrl.php?deconnexion=1");
  }
}
</script>
