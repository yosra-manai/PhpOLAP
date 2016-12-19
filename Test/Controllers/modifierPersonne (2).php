<?php
    require 'Connexion.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: listePersonne.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $prenomError = null;
        $loginError = null;
        $pwdError = null;
         
        // keep track post values
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
         
        // validate input
        $valid = true;
        if (empty($nom)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($prenom)) {
            $prenomError = 'Please enter Prenom';
            $valid = false;
        } 
               
        // update data
        if ($valid) {
           
            $resultSet = connect()->statement("UPDATE personne  set nom = ?, prenom = ?,login = ?,pwd =? WHERE id_P = ?");
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$prenom,$login,$pwd,$id));
            Database::disconnect();
            header("Location: listePersonne.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $resultSet = connect()->statement("SELECT * FROM personne where id_P =?");
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nom = $data['nom'];
        $prenom = $data['prenom'];
        $login = $data['login'];
        $pwd = $data['pwd'];
        Database::disconnect();
    }
?>