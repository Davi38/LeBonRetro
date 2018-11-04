<ul>
  <li><a href="../view/main.view.php">LeBonRetro</a></li>
  <li><a href="../controler/Controlleur.ctrl.php?categorie=all">Annonces</a></li>
  <li><a href="../controler/Controlleur.ctrl.php?vendeur=1">Vendeurs</a></li>

  <?php
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    if (!isset($_SESSION['nom'])) {
      echo '<li><button onclick="nonConnecte()" class="deconnexion">Déposer une annonce</button></li>';
      echo '<li><a href="../view/authentification.view.php">Se connecter</a></li>';
      echo '<li><a href="../view/inscription.view.php">S\'inscrire</a></li>';
    } else {
      echo '<li><a href="../view/AjouterAnnonce.view.php">Déposer une annonce</a></li>';
      echo '<li><button onclick="deconnexion()" class="deconnexion">Deconnexion</button></li>';
      echo '<li class="nom_flottant_droite">Bienvenue ' . $_SESSION['nom'] . ' !</li>';
    }
  ?>
</ul>

<script>
function deconnexion() {
  var r = confirm("Etes vous sûr de vouloir vous déconnecter ?");
  if (r) {
    location.replace("../controler/Authentification.ctrl.php?deconnexion=1");
  }
}

function nonConnecte() {
  alert("Vous n'êtes pas connecté. Veuillez vous connecter pour déposer des annonces.");
}
</script>
