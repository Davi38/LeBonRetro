<html>
  <head>
    <title>LeBonRetro</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;" />
    <meta name="author" content="Léon Davi" />
    <link rel="shortcut icon" href="data/images/logo_lebonretro.jpg" />
    <style>

    body {
      background-image: url("data/images/logo_lebonretro.jpg");
      background-attachment: fixed;
      background-position: 50% 50%;
      background-repeat: no-repeat; /* Do not repeat the image */
    }
      ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

      li {
            float: left;
        }

      li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

      /* Change the link color to #111 (black) on hover */
      li a:hover {
          background-color: #111;
      }

      h1 {
        text-align: center;
      }

      h1 a{
        text-decoration: none;
      }


      li .deconnexion {
        color: white;
        text-align: center;
        padding: 12px;
        cursor: pointer;
        background-color: #333;
        font-size: 16px;
        border: none;
      }
    </style>
  </head>

  <body>

    <h1><a href="main.view.php">LeBonRetro</a></h1>

    <?php include("view/menu.view.php"); ?>




    <p>Bienvenue sur <strong>LeBonRetro !</strong><br>Votre site de référence pour rechercher des vieux objets ou déposer vos propres annonces !<br></p>

  </body>
</html>
