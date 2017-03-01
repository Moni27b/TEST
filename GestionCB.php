<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>HomePay</title>

  <!-- Bootstrap core CSS -->
  <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>


<?php
include("Session.php"); // inclure le script session pour ouvrir une session
?>
</head>

  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" >HomePay</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="HomeUser.php">Accueil</a></li>
            <li class="active"><a href="#">Gestion CB</a></li>
            <li ><a href="GestionPaiment.php">Paiement</a></li>
            <li ><a href="Historique.php">Historique</a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
                <ul class=" bouton-right">
                    <a  href="./Deconnect.php" class="btn btn-danger " role="button">
                      <span class="glyphicon glyphicon-log-out " aria-hidden="true"></span>Se deconnecter
                    </a>
                </ul>
          </ul>
        </div>
      </div>
    </nav>
      <!-- Main component for a primary marketing message or call to action -->
    <h2 class="sub-header">Listes de mes CB</h2>
    <!-- inclure le formulaire d'ajout de carte bancaire -->
    <?php include("btn_add_CB.php"); ?>

    <div class="container">
        <?php include("dataCB.php"); ?>

          <table  id = "example" class="table table-bordered  ">
              <thead>
                  <tr >
                       <th>Numéro CB</th>
                       <th>Mois</th>
                       <th>Année</th>
                       <th>Solde (EUR)</th>
                       <th></th>
                   </tr>

              </thead>
              <?php while($row = $resultCB->fetch()) {
                $var = substr_replace($row['Num_CB'], str_repeat("X", 8), 4, 8); // Crypter le numero de la carte bancaire
                 ?>
                <tr>
                  <td><? echo $var; ?></td>
                  <td><? echo $row['Mois']; ?></td>
                  <td><? echo $row['Annee']; ?></td>
                  <td><? echo $row['Solde']; ?></td>
                  <td><a href="delCB.php?num=<?echo $row['Num_CB'];?>"onclick="return confirm('Vous voulez vraiment supprimer !');">Delete</a></td>
                </tr>
                <?php } ?>
          </table>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
