<?php
require '../Controllers/modifierPersonne.php';
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
                <h2 class="inner-tittle">Modifier Privilége d'un utilisateur</h2>
                <div class="graph-form">
                    <div class="validation-form">


                        <form class="form-horizontal" action="modifierPersonne.php" method="post">
                            <div class="control-group">
                                <div class="col-md-12 form-group2 group-mail">
                                    <label class="control-label">Role</label>
                                     <input type="hidden" name="id" value="<?php echo $id;?>"/>
                                    <select name="role">
                                        <option value="">--</option>
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="SIMPLE USER">SIMPLE USER</option>
                                       
                                    </select>
                                </div>




                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Modifier</button>
                                <a class="btn blue" onclick="parent.jQuery.fn.colorbox.close();
                                  return false;" href="" target="_top">Back</a>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div> <!-- /container -->
    </body>
</html>
