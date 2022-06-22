<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// C O N T R O L E U R //

include "$racine/vue/entete.php";
include "$racine/vue/menu.php";
include "$racine/vue/acceuil.php";
include "$racine/vue/footer.php";

?>