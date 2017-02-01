<?php


include("Conn_Bdd.php");
  $sqlCB   = "SELECT * FROM CB";
  $sqlP       = "SELECT *,Num_CB FROM Paiment , CB WHERE Paiment.idCB = CB.id " ;




  $resultCB = $conn->query($sqlCB);
  $resultP = $conn->query($sqlP );




?>
