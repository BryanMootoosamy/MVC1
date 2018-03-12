<?php
    // définir les chemins d'accès pour éviter de tout recopier.
    define('view', 'view/');
    define('controller', 'controller/');
    require_once(view.'header.php');
    // la page web se construit entre les 2 requires comme une balise entre chevrons
        //vue temporaire
        require view."accueil.php";
        require view."login.php";
    require_once(view.'footer.php');
?>
