<?php

// C O N T R O L E U R //

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "controleurAcceuil.php";
    $lesActions["acceuil"] = "controleurAcceuil.php";
    $lesActions["infocosme"] = "controleurInfocosme.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>
