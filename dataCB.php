<?php


include("Conn_Bdd.php");

  $sqlCB   = "SELECT * FROM CB";
  $sqlP       = "SELECT *,Num_CB FROM Paiment , CB WHERE Paiment.idCB = CB.id ORDER BY `Paiment`.`DateP` DESC  " ;




  $resultCB = $conn->query($sqlCB);
  $resultP = $conn->query($sqlP);
  




?>
