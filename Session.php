<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session


if (isset($_SESSION['Nom']) && isset($_SESSION['N_Compte'])) {


}
else {

  die( "Login required." );
}

?>
