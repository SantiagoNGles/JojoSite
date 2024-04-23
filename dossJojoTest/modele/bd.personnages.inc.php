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

    return $conn->lastInsertId();
}

function ajouterDansFigurer($idPerso, $idPartie) {
    global $conn;

    $sql = "INSERT INTO figurer (idPerso, idPartie, persoPrinc, datePartie) VALUES (:idPerso, :idPartie, TRUE, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":idPerso", $idPerso);
    $stmt->bindParam(":idPartie", $idPartie);
    $stmt->execute();
}

function getAllPersonnages() {
    $conn = connexionPDO();
    $sql = "SELECT p.*, f.idPartie FROM personnage p INNER JOIN figurer f ON p.idPerso = f.idPerso";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $personnages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $personnages;
}

function getPartiesForPersonnage($idPerso) {
    global $conn;

    $conn = connexionPDO();
    $sql = "SELECT partie.* FROM partie
            INNER JOIN figurer ON partie.idPartie = figurer.idPartie
            WHERE figurer.idPerso = :idPerso";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":idPerso", $idPerso);
    $stmt->execute();
    $parties = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $parties;
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