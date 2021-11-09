<?php
    // L'url de votre site, sera utile dans les pages en cas de déplacement du site...
    define('URL_BASE', 'http://MonDomaine.com/');

    // Les informations de connexion à la BDD
    $infoBdd = array(
        'interface' => 'pdo', // "pdo" ou "mysqli"
        'type' => 'mysql', // mysql ou pgsql
        'host' => 'localhost', // Votre serveur de bdd
        'port' => 3306, // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
        'charset' => 'UTF8', // charset de la bdd
        'dbname' => 'php_cours_un', // Le nom de la bdd
        'user' => 'root', // l'utilisateur de la bdd
        'pass' => '', // le password de l'utilisateur de la bdd
    );
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
