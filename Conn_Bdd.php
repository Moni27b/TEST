<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=HomePay", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion avec succés".'<br />';
    }
catch(PDOException $e)
    {
    echo "Connexion perdu: " . $e->getMessage();
    }







    /*$reponse = $bdd->query('SELECT Nom, Prenom, Profil FROM Utilisateurs');

    while ($donnees = $reponse->fetch())
    {
      echo   $donnees['Prenom'] .' '. $donnees['Nom'] . ' est un  '. $donnees['Profil'].'<br />';
    }

    $reponse->closeCursor();*/

    // On ajoute une entrée dans la table jeux_video
    /*$bdd->exec('INSERT INTO Tracker( Adresse_Mac,Id_Appareil) VALUES(\'44:55:66:77:88\', \'2\')');

    echo 'Le Tracker est ajouté !';
    ?>*/
?>
