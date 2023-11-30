<?php

$servername = "BDD_HOSTNAME";
$username = "BDD_USERNAME";
$password = "BDD_PASSWORD";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=f0_35531073_test", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de donnée: " . $e->getMessage();
} 
?>
