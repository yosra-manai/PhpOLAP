<?php
require '../Controllers/Chartfunctions.php';
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
        <!-- //lined-icons -->
        <link rel="stylesheet" href="../jqwidgets-ver3.9.1/jqwidgets/styles/jqx.base.css" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxcore.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdraw.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxchart.core.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxdata.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxbuttons.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxscrollbar.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxmenu.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.edit.js"></script>
        <script type="text/javascript" src="../jqwidgets-ver3.9.1/jqxgrid.selection.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var source2 =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Entité', type: 'string'},
                                {name: 'Nbr Demissionne 2015', type: 'int'},
                                {name: 'Taux depart 2015', type: 'float'},
                                {name: 'Nbr Demissionne 2016', type: 'int'},
                                {name: 'Taux depart 2016', type: 'float'}
                            ],
                            url: '../csv/DepartGRID.csv'

                        };
                var dataAdapter2 = new $.jqx.dataAdapter(source2);

                $("#jqxgrid").jqxGrid(
                        {
                            width: 850,
                            height: 232,
                            source: dataAdapter2,
                            selectionmode: 'singlecell',
                            columns: [
                                {text: 'Entité', datafield: 'Entité', width: '30%'},
                                {text: 'Nbr Depart 2015', datafield: 'Nbr Demissionne 2015', width: '15%'},
                                {text: 'Taux Depart 2015', datafield: 'Taux depart 2015', width: '20%', cellsformat: 'p2'},
                                {text: 'Nbr Depart 2016', datafield: 'Nbr Demissionne 2016', width: '15%'},
                                {text: 'Taux Depart 2016', datafield: 'Taux depart 2016', width: '20%', cellsformat: 'p2'}

                            ]
                        });
                // prepare chart data as an array
                var source1 =
                        {
                            datatype: "csv",
                            datafields: [
                                {name: 'Année'},
                                {name: 'NbrDemissioné Achat'},
                                {name: 'NbrDemissioné ADT'},
                                {name: 'NbrDemissioné AQF'},
                                {name: 'NbrDemissioné ATR'},
                                {name: 'NbrDemissioné Cellules Divers Prestation Sieges'},
                                {name: 'NbrDemissioné Comptabilité Contrôle de gestion'},
                                {name: 'NbrDemissioné Contrôle Inerne'},
                                {name: 'NbrDemissioné Dev des moyens'},
                                {name: 'NbrDemissioné Dev TEST ATR'},
                                {name: 'NbrDemissioné Dev TEST DECODEUR'},
                                {name: 'NbrDemissioné direction'},
                                {name: 'NbrDemissioné ENERGIE'},
                                {name: 'NbrDemissioné Gestion Indus'},
                                {name: 'NbrDemissioné Indus ADT'},
                                {name: 'NbrDemissioné Indus ATR'},
                                {name: 'NbrDemissioné Indus Energie'},
                                {name: 'NbrDemissioné Informatique'},
                                {name: 'NbrDemissioné IT MANUFACTURING'},
                                {name: 'NbrDemissioné Logistique'},
                                {name: 'NbrDemissioné Logistique centrale'},
                                {name: 'NbrDemissioné Maintenance'},
                                {name: 'NbrDemissioné Maintenance ENERGIE'},
                                {name: 'NbrDemissioné Personnel en Transfert'},
                                {name: 'NbrDemissioné PROCESS ATR'},
                                {name: 'NbrDemissioné PROCESS CENTRAL'},
                                {name: 'NbrDemissioné Process U2'},
                                {name: 'NbrDemissioné Process Energie'},
                                {name: 'NbrDemissioné PROJET MES'},
                                {name: 'NbrDemissioné Qualité'},
                                {name: 'NbrDemissioné Qualité Indus BB'},
                                {name: 'NbrDemissioné RH'},
                                {name: 'NbrDemissioné SURETE'},
                                {name: 'NbrDemissioné TEST ADT'},
                                {name: 'NbrDemissioné TEST ATR'},
                                {name: 'NbrDemissioné TEST Energie'}
                            ],
                            url: '../csv/RepartionDepart.csv'

                        };
                var dataAdapter1 = new $.jqx.dataAdapter(source1);
                // prepare jqxChart settings
                var settings = {
                    title: "Repartition de Depart ",
                    description: "Nombre des matricules demissionés par entité",
                    enableAnimations: true,
                    showLegend: true,
                    padding: {left: 5, top: 5, right: 5, bottom: 5},
                    titlePadding: {left: 90, top: 0, right: 0, bottom: 10},
                    source: dataAdapter1,
                    xAxis:
                            {
                                dataField: 'Année',
                                gridLines: {visible: true}
                            },
                    colorScheme: 'scheme01',
                    seriesGroups:
                            [
                                {
                                    type: 'column',
                                    columnsGapPercent: 50,
                                    seriesGapPercent: 0,
                                    valueAxis:
                                            {
                                                visible: true,
                                                unitInterval: 10,
                                                minValue: 0,
                                                maxValue: 100,
                                                title: {text: "Nombre des matricules demissionés"}
                                            },
                                    series: [
                                        {dataField: 'NbrDemissioné Achat', displayText: 'Achat'},
                                        {dataField: 'NbrDemissioné ADT', displayText: 'ADT'},
                                        {dataField: 'NbrDemissioné AQF', displayText: 'AQF'},
                                        {dataField: 'NbrDemissioné ATR', displayText: 'ATR'},
                                        {dataField: 'NbrDemissioné Cellules Divers Prestation Sieges', displayText: 'Cellules Divers Prestation Sieges'},
                                        {dataField: 'NbrDemissioné Comptabilité Contrôle de gestion', displayText: 'Comptabilité Contrôle de gestion'},
                                        {dataField: 'NbrDemissioné Contrôle Inerne', displayText: 'Contrôle Inerne'},
                                        {dataField: 'NbrDemissioné Dev des moyens', displayText: 'Dev des moyens'},
                                        {dataField: 'NbrDemissioné Dev TEST ATR', displayText: 'Dev TEST ATR'},
                                        {dataField: 'NbrDemissioné Dev TEST DECODEUR', displayText: 'Dev TEST DECODEUR'},
                                        {dataField: 'NbrDemissioné direction', displayText: 'direction'},
                                        {dataField: 'NbrDemissioné ENERGIE', displayText: 'ENERGIE'},
                                        {dataField: 'NbrDemissioné Gestion Indus', displayText: 'Gestion Indus'},
                                        {dataField: 'NbrDemissioné Indus ADT', displayText: 'Indus ADT'},
                                        {dataField: 'NbrDemissioné Indus ATR', displayText: 'Indus ATR'},
                                        {dataField: 'NbrDemissioné Indus Energie', displayText: 'Indus Energie'},
                                        {dataField: 'NbrDemissioné Informatique', displayText: 'Informatique'},
                                        {dataField: 'NbrDemissioné IT MANUFACTURING', displayText: 'IT MANUFACTURING'},
                                        {dataField: 'NbrDemissioné Logistique', displayText: 'Logistique'},
                                        {dataField: 'NbrDemissioné Logistique centrale', displayText: 'Logistique centrale'},
                                        {dataField: 'NbrDemissioné Maintenance', displayText: 'Maintenance'},
                                        {dataField: 'NbrDemissioné Maintenance ENERGIE', displayText: 'Maintenance ENERGIE'},
                                        {dataField: 'NbrDemissioné Personnel en Transfert', displayText: 'Personnel en Transfert'},
                                        {dataField: 'NbrDemissioné PROCESS ATR', displayText: 'PROCESS ATR'},
                                        {dataField: 'NbrDemissioné PROCESS CENTRAL', displayText: 'PROCESS CENTRAL'},
                                        {dataField: 'NbrDemissioné Process U2', displayText: 'Process U2'},
                                        {dataField: 'NbrDemissioné Process Energie', displayText: 'Process Energie'},
                                        {dataField: 'NbrDemissioné PROJET MES', displayText: 'PROJET MES'},
                                        {dataField: 'NbrDemissioné Qualité', displayText: 'Qualité'},
                                        {dataField: 'NbrDemissioné Qualité Indus BB', displayText: 'Qualité Indus BB'},
                                        {dataField: 'NbrDemissioné RH', displayText: 'RH'},
                                        {dataField: 'NbrDemissioné SURETE', displayText: 'SURETE'},
                                        {dataField: 'NbrDemissioné TEST ADT', displayText: 'TEST ADT'},
                                        {dataField: 'NbrDemissioné TEST ATR', displayText: 'TEST ATR'},
                                        {dataField: 'NbrDemissioné TEST Energie', displayText: 'TEST Energie'}
                                    ]
                                }
                            ]
                };
                // setup the chart
                $('#jqxChart').jqxChart(settings);



            });
        </script>
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
                    <div class="outter-wp">	
                        <!--/charts-->
                        <div class="candile">
                            <?php ChartDepart() ?>
                            <div class="row-one">  

                                <h3 class="sub-tittle">Suivi du depart </h3>



                                <div id="jqxgrid" style="font-size: 13px; font-family: Verdana; "></div>



                            </div>
                        </div>
                        <div class="candile">
                            <div class="candile-inner"> 
                                <div id='jqxChart' style="width:1000px; height:400px"></div>
                            </div>
                        </div>
                        <!--//outer-wp-->
                    </div>

                    <!--footer section start-->
                    <footer>
                        <p>&copy 2016 Sagemcom . Tous les droits sont réservés </p>
                    </footer>
                    <!--footer section end-->
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

