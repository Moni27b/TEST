<?php

include("Conn_Bdd.php");


$login = $_POST['login'];
$motdepasse = $_POST['motdepasse'];



$sql = "SELECT * FROM Client  WHERE N_Compte = '$login'  AND Password = '$motdepasse'";
$sqlCB   = "SELECT * FROM CB";

$result = $conn->query($sql);







if (!$row = $result->fetch()){
  echo '<body onLoad="alert(\'IPN ou Mot de Passe incorrect.\')">';
  die( "IPN ou Mot de Passe incorrect." );
  } else {
    // on la démarre :)
  session_start ();
  // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)


  $_SESSION['Nom'] = $row['Nom'];
  $_SESSION['N_Compte'] = $row['N_Compte'];
  $_SESSION['id'] = $row['id'];


    header('Location: HomeUser.php');
    //echo '<body onLoad="alert(\'Connection en cours.\')">';


  }

?>
