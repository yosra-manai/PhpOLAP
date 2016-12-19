<?php
     
    require '../Models/database.php';
 
    if ( !empty($_POST)) {
        
        
         
        // keep track post values
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $role = $_POST['role'];
        // validate input
        $valid = true;
        
           
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Utilisateur (Nom,Login,Pwd,Email,Type_P) values(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$login,$pwd,$email,$role));
            Database::disconnect();
            header("Location: Administration.php");
        }
    }
?>