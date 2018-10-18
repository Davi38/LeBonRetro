<?php
  //require_once("../model/Categorie.class.php");
  //require_once("../model/Article.class.php");

  // Definition de l'unique objet de DAO
  $dao = new DAO();

  // Le Data Access Object
  // Il représente la base de donnée
  class DAO {
    // L'objet local PDO de la base de donnée
    private $db;
    // Le type, le chemin et le nom de la base de donnée
    private $database = '../data/db/bricomachin.db';

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $this->database = 'sqlite:'.$this->database;
      $this->db = new PDO($this->database);
      if (!$this->db) {
        die ("Database error");
      } catch (PDOException$e) {
        die("PDO Error :".$e->getMessage()."$this->database\n");
      }
    }


    // Accès à tous les articles
    // Retourne une table d'objets de type Article
    function getAllArticle() {
      $sth = $this->db->prepare("SELECT * FROM article");
      $sth->execute();
      $result = $sth->fetchAll();
      //print_r($result);
      return $result;
    }


    // retourne les articles de la categorie donnée en paramètre
    function getArticleCategorie($categorie) {
    }



    // Accès aux n premiers articles
    // Cette méthode retourne un tableau contenant les n permier articles de
    // la base sous la forme d'objets de la classe Article.
    function firstN($n) {
      $sth = $this->db->prepare("SELECT * FROM article ORDER BY ref LIMIT $n");
      $sth->execute();
      $result = $sth->fetchAll();

      $articles = array();

      foreach ($result as $art) {
        $arti = new Article();
        $arti->ref = $art[0];
        $arti->libelle = $art[1];
        $arti->categorie = $art[2];
        $arti->prix = $art[3];
        $arti->image = $art[4];
        array_push($articles, $arti);
      }
      return $articles;
    }

    // Acces au n articles à partir de la reférence $ref
    // Cette méthode retourne un tableau contenant n  articles de
    // la base sous la forme d'objets de la classe Article.
    function getN($ref,$n) {
      $sth = $this->db->prepare("SELECT * FROM article WHERE ref>$ref ORDER BY ref LIMIT $n");
      $sth->execute();
      $result = $sth->fetchAll();
      //print_r($result);
      $articles = array();
      foreach ($result as $art) {
        $arti = new Article();
        $arti->ref = $art[0];
        $arti->libelle = $art[1];
        $arti->categorie = $art[2];
        $arti->prix = $art[3];
        $arti->image = $art[4];
        array_push($articles, $arti);
      }
      return $articles;
    }

    // Acces à l'article suivant l'article dans l'ordre des références
    // Cette méthode ne rend qu'un objet de la classe Article
    function next(Article $a) {
      return $this->getN($a->ref, 1);
    }

    // Acces aux n articles qui précèdent de $size l'article $a dans l'ordre des références
    function prevN(Article $a,$n) {
      $this->getN($a->ref-$n, $n);

    }

  }
?>
