<?php


  include_once("../model/Article.class.php");
  include_once("../model/Vendeur.class.php");

  // Definition de l'unique objet de DAO
  $dao = new DAO();

  class DAO {
    // L'objet local PDO de la base de donnée
    private $db;
    // Le type, le chemin et le nom de la base de donnée
    private $database = '../data/db/article.db';

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $this->database = 'sqlite:'.$this->database;
      $this->db = new PDO($this->database);
      /*if (!$this->db) {
        die ("Database error");
      } catch (PDOException$e) {
        die("PDO Error :".$e->getMessage()."$this->database\n");
      } */
    }

    // Convertie un tableau de données en tableau d'objet Article
    // retourne un tableau d'objet Article
    function tableauTOarticles($tab) {
      $articles = array();
      foreach ($tab as $art) {
        $arti = new Article();
        $arti->ref = $art['identifiant'];
        $arti->nom = $art['nom'];
        $arti->libelle = $art['description'];
        $arti->categorie = $art['categorie'];
        $arti->prix = $art['prix'];
        $arti->image = $art['image'];
        $arti->datePublication = $art['DatePublication'];
        $arti->localisation = $art['localisation'];
        array_push($articles, $arti);
      }
      return $articles;
    }

    // Convertie un tableau de données en tableau d'objet Vendeur
    // retourne un tableau d'objet Vendeur
    function tableauTOvendeurs($tab) {
      $vendeurs = array();
      foreach ($tab as $ven) {
        $vend = new Vendeur();
        $vend->nom = $ven['nom'];
        $vend->telephone = $ven['telephone'];
        $vend->mail = $ven['mail'];
        array_push($vendeurs, $vend);
      }
      return $vendeurs;
    }


    // Accès à tous les articles
    // Retourne une table d'objets de type Article
    function getAllArticle() {
      $sth = $this->db->prepare("SELECT * FROM article");
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOarticles($result);
    }

    // retourne tous les vendeurs de la base de données
    function getAllVendeur() {
      $sth = $this->db->prepare("SELECT * FROM vendeur");
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOvendeurs($result);
    }


    // retourne les articles de la categorie donnée en paramètre
    function getArticlesCategorie($categorie) {
      $sth = $this->db->prepare('SELECT * FROM article WHERE categorie="' . $categorie . '"');
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOarticles($result);
    }


    // Accès aux n premiers articles
    // Cette méthode retourne un tableau contenant les n permier articles de
    // la base sous la forme d'objets de la classe Article.
    function firstN($n) {
      $sth = $this->db->prepare("SELECT * FROM article ORDER BY identifiant LIMIT $n");
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOarticles($result);
    }

    // Acces au n articles à partir de la reférence $ref
    // Cette méthode retourne un tableau contenant n  articles de
    // la base sous la forme d'objets de la classe Article.
    function getN($ref,$n) {
      $sth = $this->db->prepare("SELECT * FROM article WHERE identifiant>$ref ORDER BY identifiant LIMIT $n");
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOarticles($result);
    }


    // Ajouter un vendeur dans la BDD
    function addVendeur($nom,$telephone,$mail) {
      $sth = $this->db->prepare("INSERT INTO vendeur(nom,telephone,mail) VALUES ($nom,$telephone,$mail)");
      $sth->execute();
    }


    // Ajouter un article dans la BDD
    // ATTENTION : pour ajouter un article il faut que le vendeur de l'article soit existant !! (FOREIGN KEY(nomVendeur))
    function addArticle($id,$nom,$description,$nomVendeur,$prix,$image,$categorie,$datePublication,$localisation) {
      $sth = $this->db->prepare("INSERT INTO article VALUES");
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOarticles($result);
    }


    // retourne l'objet vendeur si il est trouvé dans la base de données avec le bon mot de passe
    // retourne null sinon
    function getVendeur($id,$mdp) {
      $sth = $this->db->prepare('SELECT * FROM Vendeur WHERE nom="' . $id .'"');
      $sth->execute();
      $result = $sth->fetchAll();

      return $this->tableauTOvendeurs($result)[0];
    }


    // Acces aux n articles qui suivent l'article $a dans l'ordre des références
    function next(Article $a, $n) {
      $result = $this->getN($a->identifiant, $n);
      return $this->tableauTOarticles($result);
    }

    // Acces aux n articles qui précèdent l'article $a dans l'ordre des références
    function prevN(Article $a,$n) {
      $result = $this->getN($a->identifiant-$n, $n);
      return $this->tableauTOarticles($result);
    }

  }
?>
