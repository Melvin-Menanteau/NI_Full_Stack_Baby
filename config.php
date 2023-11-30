<?php

$servername = " sql105.infinityfree.com ";
$username = "if0_35531073";
$password = " 1zpokLG1s2VscU ";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=f0_35531073_test", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de donnée: " . $e->getMessage();
} 
?>
