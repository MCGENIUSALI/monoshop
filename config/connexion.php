<?php
try {
    // Connexion à la base de données
    $access = new PDO("mysql:host=localhost;dbname=monoshop;charset=utf8", 'root', '');
    
    // Définir le mode d'erreur PDO sur Exception
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Afficher l'erreur de connexion
    echo "Erreur de connexion : " . $e->getMessage();
    // Arrêter l'exécution du script en cas d'erreur
    die();
}
?>