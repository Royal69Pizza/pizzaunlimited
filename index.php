<?php

/* R A C I N E */
include "getRacine.php";

/* C O N T R O L E U R */
include "$racine/controleur/controleurPrincipal.php";

/* A C T I O N S */
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

/* A C T I O N S    C O N T R O L E U R */
$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";

?>
     