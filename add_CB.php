<?php

include("Conn_Bdd.php");
include("Session.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sth = $conn->prepare("INSERT INTO CB (Num_CB, Mois,Annee,id_client,Solde) VALUES
            (?,?,?,?,?)");



            $sth->execute(array($_POST['Numero_CB'],$_POST['Mois'],$_POST['Annee'],$_SESSION['id'],$_POST['Solde']));

            header("location: GestionCB.php");
        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
