<?php

include("Conn_Bdd.php");
//include("Session.php");




try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $resCB = $conn->query("SELECT id ,Solde FROM CB WHERE CB.Num_CB =" .$_POST['Num_CB']);
            $row = $resCB->fetch();
             $idCB =  $row["id"];
             $solde = $row["Solde"];

             if ($_POST['tarif'] <=  $solde ){

               $val = $solde - $_POST['tarif'] ;

               $sth = $conn->prepare("INSERT INTO Paiment (Commercant, Montant,idCB) VALUES
               (?,?,?)");
               $sth->execute(array($_POST['Cm'],$_POST['tarif'],$idCB));

               $statement = $conn->prepare("UPDATE CB SET Solde= :val WHERE Num_CB =" .$_POST['Num_CB']);
               $statement->bindValue(":val", $val);
               $statement->execute();

               header("location: Historique.php");
             }
          else { die("Vous n'avez pas assez de solde pour faire ce paiment");}

        }

        catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
