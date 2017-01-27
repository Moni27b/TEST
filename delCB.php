<?php

include("Conn_Bdd.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $num = $_GET['num'];

            $sqldel = "DELETE FROM CB WHERE Num_CB = '$num'" ;
            $conn->query($sqldel);

            header("location: GestionCB.php");

        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }



?>
