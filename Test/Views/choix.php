<?php
session_start();
if($_SESSION['valid_user']!=true){

header('Location: authentification.php');
die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>
 
<body>
  <h4><a href = "../Controllers/logout.php">Sign Out</a></h4>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h4>Ajout selon l'imatricule</h4>
                    </div>

                    <form class="form-horizontal" action="../Views/recupererPersonne.php" method="post">
                    	  <div class="form-actions">
                          <button type="submit" class="btn btn-success">Ajouter</button>
                          <a class="btn" href="listePersonne.php">Retour</a>
                        </div>
                    </form>

                     <div class="row">
                        <h4>Ajout Manuel</h4>
                    </div>

                    <form class="form-horizontal" action="../Views/ajouterPersonne.php" method="post">
                    	  <div class="form-actions">
                          <button type="submit" class="btn btn-success">Ajouter</button>
                          <a class="btn" href="listePersonne.php">Retour</a>
                        </div>
                    </form>

                    </div>
               </div> <!-- /container -->
  </body>
</html>
