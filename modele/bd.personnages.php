<?php

include_once "bd.inc.php";

function ajouterPersonnage($prenom, $nom) {
    global $conn;

    $sql = "INSERT INTO personnage (prenomPerso, nomPerso) VALUES (:prenom, :nom)";
    $conn = connexionPDO();
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":nom", $nom);
    $stmt->execute();
}

function getAllPersonnages() {
    $conn = connexionPDO();
    $sql = "SELECT * FROM personnage";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $personnages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $personnages;
}

function supprimerPersonnage($id) {
    global $conn;

    $conn = connexionPDO();
    $sql = "DELETE FROM personnage WHERE idPerso = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function modifierPersonnage($id, $nouveauPrenom, $nouveauNom) {
    global $conn;

    $conn = connexionPDO();
    $sql = "UPDATE personnage SET prenomPerso = :prenom, nomPerso = :nom WHERE idPerso = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':prenom', $nouveauPrenom);
    $stmt->bindParam(':nom', $nouveauNom);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}