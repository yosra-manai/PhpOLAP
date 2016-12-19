<?php

require '../Models/database.php';

session_start();
if ($_SESSION['valid_user'] != true) {

    header('Location: login.php');
    die();
}


$pdo = Database::connect();
//$pdo->query("SET NAMES 'utf8'");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT e.Login,e.Nom,e.Type_P,e.Email, d.Entité, d.Diplome FROM Utilisateur as e 
INNER JOIN DimEffectifs as d ON d.Matricule = e.Login AND e.Login = ?";

$q = $pdo->prepare($sql);
$q->execute(array($_SESSION['username']));
$data = $q->fetch(PDO::FETCH_NUM); //retourne un tableau indexé par le numéro de la colonne
Database::disconnect();
?>