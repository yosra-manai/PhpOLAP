<?php
require '../Controllers/supprimerPersonne.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link   href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <script src="../js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            <div class="forms-main">
                <h2 class="inner-tittle">Bloquer un utilisateur</h2>
                <div class="graph-form">
                    <div class="validation-form">


                        <form class="form-horizontal" action="supprimerPersonne.php?id=<?php echo $id ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>"/>
                            <p class="alert alert-error">Êtes-vous sûr de le bloquer?</p>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-danger">Oui</button>
                                <a class="btn red" onclick="parent.jQuery.fn.colorbox.close();
                                  return false;" href="" target="_top">Non</a>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>     
        </div> <!-- /container -->
        <script src="../js/jquery.colorbox.js"></script>
    </body>
</html>
