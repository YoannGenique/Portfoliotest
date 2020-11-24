<?php
try{
    // Connexion base de donnée
    $db = new PDO('mysql:host=localhost;dbname=xrin4305_dashboard', 'xrin4305_projet1','G21m012020');
    $db->exec('SET NAMES "UTF8"');

}catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}