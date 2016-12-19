<?php
require '../Controllers/ajouterPersonne.php';
?>
<?php
session_start();
if ($_SESSION['valid_user'] != true) {

    header('Location: login.php');
    die();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Portail | SagemCom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="../css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
        <!-- /js -->
        <script src="../js/jquery-1.11.1.min.js"></script>
        <!-- //js-->
    </head>

    <body>

        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!-- header-starts -->
                    <div class="header-section">
                        <!--menu-right-->
                        <div class="top_menu">

                            <!--/profile_details-->
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">



                                    <li class="dropdown note">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> </a>


                                    </li>	
                                    <li class="dropdown note">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> </a>

                                    </li>		   							   		
                                    <div class="clearfix"></div>	
                                </ul>
                            </div>
                            <div class="clearfix"></div>	
                            <!--//profile_details-->
                        </div>
                        <!--//menu-right-->
                        <div class="clearfix"></div>
                    </div>
                    <!-- //header-ends -->
                    <!--//outer-wp-->
                    <div class="outter-wp">
                        <!--sub-heard-part-->
                        <div class="sub-heard-part">
                            <ol class="breadcrumb m-b-0">
                                <li><a href="accueil.php">Accueil</a></li>
                                <li class="active">Administration</li>
                            </ol>
                        </div>
                        <!--/sub-heard-part-->	
                        <!--/forms-->
                        <div class="forms-main">
                            <h2 class="inner-tittle">Ajouter Un utilisateur</h2>
                            <div class="graph-form">
                                <div class="validation-form">
                                    <!---->

                                    <form class="form-horizontal" action="../Views/ajouterPersonne.php" method="post">

                                        <div class="col-md-12 form-group1 group-mail ">
                                            <label class="control-label">NomComplet</label>
                                            <input name="nom" type="text" placeholder="Nom" value="<?php echo!empty($nom) ? $nom : ''; ?>" required="">

                                        </div>

                                        <div class="clearfix"> </div>


                                        <div class="col-md-12 form-group1 group-mail ">
                                            <label class="control-label">Email</label>
                                            <input name="email" type="text" placeholder="Email" value="<?php echo!empty($email) ? $email : ''; ?>" required="">

                                        </div>
                                        <div class="clearfix"> </div>
                                        <div class="col-md-12 form-group1 group-mail ">
                                            <label class="control-label">Login</label>
                                            <input name="login" type="text" placeholder="Matricule" value="<?php echo!empty($login) ? $login : ''; ?>" required="">

                                        </div>
                                        <div class="clearfix"> </div>

                                        
                                        <div class="col-md-12 form-group1 group-mail">
                                            <label class="control-label">Créer un mot de passe</label>
                                            <input name="pwd" type="password" placeholder="Mot de passe" value="<?php echo!empty($pwd) ? $pwd : ''; ?>"required="">

                                        </div>
                                           
                                            <div class="clearfix"> </div>
                                        

                                        <div class="col-md-12 form-group2 group-mail">
                                            <label class="control-label">Role</label>
                                            <select name="role">
                                                <option  value="<?php echo!empty($role)? $role : ''; ?>">--</option>
                                                <option  value="ADMIN">ADMIN</option>
                                                <option  value="SIMPLE USER">SIMPLE USER</option>
                                            </select>

                                        </div>
                                        <div class="clearfix"> </div>

                                        <div class="col-md-12 form-group button-2">
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                            <a type="reset" class="btn btn-default" href="Administration.php">Retour</a>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </form>

                                    <!---->
                                </div>

                            </div>
                        </div> 
                        <!--//forms-->											   
                    </div>
                    <!--//outer-wp-->
                    <!--footer section start-->
                    <footer>
                        <p>&copy 2016 Sagemcom . Tous les droits sont réservés.</p>
                    </footer>
                    <!--//footer section end-->
                </div>
            </div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="accueil.php"> <span id="logo"> <h1>Portail</h1></span> 
                    <!--<img id="logo" src="" alt="Logo"/>--> 
                    </a> 
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                <!--/down-->
                <div class="down">	
                    <a href="accueil.php"><img src="../images/ad.png"></a>


                    <ul>
                        <li><a class="tooltips" href="Profil.php"><span>Profil</span><i class="lnr lnr-user"></i></a></li>
                        <li><a class="tooltips" href="Administration.php"><span>Configuration</span><i class="lnr lnr-cog"></i></a></li>
                        <li><a class="tooltips" href="../Controllers/logout.php"><span>Déconnecter</span><i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                </div>
                <!--//down-->
                <div class="menu">
                    <ul id="menu" >
                        <li><a href="accueil.php"><i class="fa fa-tachometer"></i> <span>Tableau de bord</span></a></li>
                        <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i><span>Modules</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="SuiviEmbauche.php">Suivi de l'embauche </a></li>
                                <li id="menu-academico-boletim" ><a href="SuiviAbsenteisme.php">Suivi de l'absentéisme</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviES.php">Suivi de E/S</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviSupp.php">Suivi du temps supplémentaire</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviConge.php">Suivi du congés</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="SuiviDepart.php">Suivi du depart</a></li>

                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="Formulaire.php"><i class="fa fa-file-text-o"></i> <span>Rapport personnalisé</span> </a>

                        </li>
                        <li><a href="Administration.php"><i class="lnr lnr-pencil"></i> <span>Administration</span></a></li>


                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>		
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                }
                else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <script src="../js/jquery.nicescroll.js"></script>
        <script src="../js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>