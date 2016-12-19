 <?php
 require '../Controllers/detailsPersonne.php';
 ?>
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
                        <h3>Details personne</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nom'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Prenom</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['prenom'];?>
                            </label>
                        </div>
                      </div>
                  
                      <div class="control-group">
                        <label class="control-label">Login</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['login'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Mot de passe</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['pwd'];?>
                            </label>
                        </div>
                      </div>
                    
                        <div class="form-actions">
                          <a class="btn" href="listePersonne.php">Retour</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>