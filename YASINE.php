<?php
$servername = "localhost";
$username = "nom_utilisateur";
$password = "mot_de_passe";

// Création de la connexion
$conn = new mysqli($servername, $username, $password);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Création de la base de données
$sql = "CREATE DATABASE IF NOT EXISTS nom_base_de_donnees";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès.";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>
