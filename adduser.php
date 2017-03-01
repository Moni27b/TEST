<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);
include("Conn_Bdd.php");


try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sth = $conn->prepare("INSERT INTO Client (N_Compte, Nom, Adresse, Password) VALUES
            (?,?,?,?)");

            $nom= 'Cecilia';
            $numCompte= 654321 ;
            $Adresse= 'Tours';
            $mdp = 'User';

                $options = [
                  'cost' => 11,];
              // Get the password from post
              $passwordFromPost = $mdp;
              $hash = password_hash($passwordFromPost, PASSWORD_BCRYPT, $options);

            $sth->execute(array($numCompte,$nom,$Adresse,$hash));

            echo "utilisateur ".$nom.' est ajouté';
        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }*/


?>
