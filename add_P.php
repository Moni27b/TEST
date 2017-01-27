<?php

include("Conn_Bdd.php");
//include("Session.php");




try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $resCB = $conn->query("SELECT id FROM CB WHERE CB.Num_CB =" .$_POST['Num_CB']);
            $row = $resCB->fetch();
             $idCB =  $row["id"];


            $sth = $conn->prepare("INSERT INTO Paiment (Commercant, Montant,idCB) VALUES
            (?,?,?)");



            $sth->execute(array($_POST['Cm'],$_POST['tarif'],$idCB));

            header("location: GestionCB.php");
        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
