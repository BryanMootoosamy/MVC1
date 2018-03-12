<?php
    $user = "root";
    $pass = "ananas";
    try {
        $db = new PDO('mysql:host=localhost;dbname=magic', $user, $pass);
    } catch (Exception $e) {
        echo "Erreur:".$e->getMessage();
    }

?>
