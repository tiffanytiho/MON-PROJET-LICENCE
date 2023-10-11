<?php
    // Connexion à la base de données 
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe_bd = "";
    $base_de_donnees = "projet_simplon";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $base_de_donnees);
?>