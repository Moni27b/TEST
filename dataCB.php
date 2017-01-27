<?php


include("Conn_Bdd.php");
  $sqlCB   = "SELECT * FROM CB";
  $sqlP       = "SELECT * FROM Paiment" ;




  $resultCB = $conn->query($sqlCB);
  $resultP = $conn->query($sqlP );




?>
