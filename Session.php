<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['Nom']) && isset($_SESSION['N_Compte'])) {
}
else {
  // on renvoie sur la page index en affichant une erreur
  die('<META HTTP-equiv="refresh" content=0;URL=index.php?valmsg=1>');
}

?>
