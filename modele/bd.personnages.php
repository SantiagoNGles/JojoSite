<?php

include_once "bd.inc.php";

function ajouterPersonnage($prenom, $nom) {
    global $conn;

    $sql = "INSERT INTO personnage (prenomPerso, nomPerso) VALUES (:prenom, :nom)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":nom", $nom);
    $stmt->execute();
    $stmt->close();
}

function getAllPersonnages() {
    $conn = connexionPDO();
    $sql = "SELECT * FROM personnage";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $personnages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $personnages;
}