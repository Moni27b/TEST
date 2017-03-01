<?php

include("Conn_Bdd.php");

$login = $_POST['login'];
//$motdepasse = $_POST['motdepasse'];


/*$sql = "SELECT * FROM Client  WHERE N_Compte = '$login'  AND Password = '$motdepasse'";
$sqlCB   = "SELECT * FROM CB";
$result = $conn->query($sql);*/


$sqlutilisateur   = "SELECT * FROM Client Where N_Compte = '$login'";
$resultUser = $conn->query($sqlutilisateur);
$row = $resultUser->fetch();
$passwordFromPost = $_POST['motdepasse'];
$hashedPasswordFromDB = $row['Password'] ;
if (password_verify($passwordFromPost, $hashedPasswordFromDB)) {

          // on la démarre :)
        session_start ();
        $_SESSION['Nom'] = $row['Nom'];
        $_SESSION['N_Compte'] = $row['N_Compte'];
        $_SESSION['id'] = $row['id'];

          header('Location: HomeUser.php');
          //echo '<body onLoad="alert(\'Connection en cours.\')">';


 //die( "IPN ou Mot de Passe incorrect." );
  } else {


    die('<META HTTP-equiv="refresh" content=0;URL=index.php?valmsg=1>');

  }

?>
