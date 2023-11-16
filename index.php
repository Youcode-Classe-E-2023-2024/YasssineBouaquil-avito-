
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "avito_database";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Création de la base de données
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
