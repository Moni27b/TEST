<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="bootstrap-3.3.7/docs/favicon.ico">

  <title>Tracker des appareils mobile</title>

  <!-- Bootstrap core CSS -->
  <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<?php
include("Session.php");
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

          <a class="navbar-brand" href="#">HomePay</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="HomeUser.php">Accueil</a></li>
            <li ><a href="GestionCB.php">Gestion CB</a></li>
            <li class="active"><a href="#">Paiment</a></li>
            <li ><a href="Historique.php">Historique</a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right">

                <ul class=" bouton-right">
                    <a  href="./Deconnect.php" class="btn btn-danger " role="button">
                          <span class="glyphicon glyphicon-log-out " aria-hidden="true"></span>Se deconnecter
                    </a>
                </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <h2 class="sub-header">Interface de paiment</h2>


    <div class="container">
      <?php include("dataCB.php"); ?>
      <!-- Main component for a primary marketing message or call to action -->
      <form method="post" action="add_P.php">

        <div class="form-group">
          <label for="Cm">Commercant</label>
          <select class="form-control" id="Cm" name="Cm" required>
            <option>Auchan</option>
            <option>Nike</option>
            <option>Dominos Pizza</option>
            <option>Amazon</option>
            <option>Airbnb</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Num_CB">Carte Bancaire</label>
          <select class="form-control" id="Num_CB" name="Num_CB" required>
            <?php while($row = $resultCB->fetch()) {?>
            <option><? echo $row['Num_CB']; ?></option>

              <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="CVV" >CVV</label>
          <div class="col-10">
            <input min='100' max='999'  class="form-control" type="number" placeholder="345"  id="CVV" required >
      </div>
</div>
      <div class="form-group">
        <label for="solde" >Tarif (EUR)</label>
        <div class="col-10">
          <input  min='1' max='1000' class="form-control" type="number"  id="tarif" name ="tarif" required>
      </div>
</div>

        <button type="submit" class="btn btn-primary">Je confirme mon payment</button>
</form>



    </div> <!-- /container -->


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
