
<?php
require '../Controllers/Profil.php';
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
                                <li class="active">Profil</li>
                            </ol>
                        </div>
                        <!--//sub-heard-part-->
                        <!--/profile-->
                        <h3 class="sub-tittle pro">Profil</h3>
                        <div class="profile-widget">
                            <img src="../images/ad.png" alt=" " />
                            <h2><?php echo $data[2]; ?></h2>

                        </div>
                        <!--/profile-inner-->
                        <div class="profile-section-inner">
                            <div class="col-md-6 profile-info">
                                <h3 class="inner-tittle">Informations Personnelles </h3>
                                <div class="main-grid3">
                                    <div class="p-20">
                                        <div class="about-info-p">
                                            <strong>Matricule</strong>
                                            <br>
                                            <p class="text-muted"> <?php echo $data[0]; ?></p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Nom Complet</strong>
                                            <br>
                                            <p class="text-muted"> <?php echo $data[1]; ?></p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"> <?php echo $data[3]; ?></p>
                                        </div>

                                        <div class="about-info-p m-b-0">
                                            <strong>Service</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $data[4]; ?></p>
                                        </div>
                                        <div class="about-info-p m-b-0">
                                            <strong>Diplome</strong>
                                            <br>
                                            <p class="text-muted"><?php echo $data[5]; ?></p>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!--//profile-inner-->
                    <!--//profile-->
                </div>
                <!--//outer-wp-->


                <!--footer section start-->
                <footer>
                    <p>&copy 2016 Sagemcom . Tous les droits sont réservés.</a></p>
                </footer>
                <!--//footer section end-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Portail</h1></span> 
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
    
   